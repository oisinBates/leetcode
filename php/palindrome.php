<?php
// https://leetcode.com/problems/palindrome-number/
// Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        
        if($x<0) {
            return false;
        } else if($x<10){
            return true;
        }
        $x_string = (string)$x;

        while(strlen($x_string) > 1){
            if( substr($x_string, 0, 1) === substr($x_string, -1) ){
                $x_string = substr($x_string, 1,-1);
            }else{
                return false;
            }
        }

        return true;

    }
}
$solution_test = new Solution;
var_dump($solution_test->isPalindrome(121));
var_dump($solution_test->isPalindrome(-121));
var_dump($solution_test->isPalindrome(10));
var_dump($solution_test->isPalindrome(9));

?>