<?php
// https://leetcode.com/problems/reverse-integer/
// Given a 32-bit signed integer, reverse digits of an integer.
// Assume we are dealing with an environment which could only store integers within the // 32-bit signed integer range: [−231,  231 − 1]. For the purpose of this problem, 
// assume that your function returns 0 when the reversed integer overflows.

class Solution {
    /**
    * @param Integer $x
    * @return Integer
    */
    function reverse($x) {
        $x_string = strval($x);

        if(strlen($x_string)<2){
            return $x_string;
        } else {
            if($x_string[0] === '-'){
                $x_string = substr($x_string,1);
                $output = '-';
            } else {
                $output = '';
            }

            for ($count = strlen($x_string)-1; $count >= 0; $count--) {
                if($x_string[$count] === '0'){
                    $x_string = substr($x_string,0,strlen($x_string)-1);
                } else {
                    break;
                }
            }
            for ($count = strlen($x_string)-1; $count >= 0; $count--) {
                $output = $output . $x_string[$count];
            }
        } 
        
        $output = (int) $output;
        if ( $output < -2147483648 || $output > 2147483647 ){
            return 0;
        }
        
        return $output;
    }
}

$solution_test = new Solution;
var_dump($solution_test->reverse(123));
var_dump($solution_test->reverse(-123));
var_dump($solution_test->reverse(120));
var_dump($solution_test->reverse(21474836480));
var_dump($solution_test->reverse(-21474836470));

?>