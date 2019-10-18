<?php
// https://leetcode.com/problems/two-sum/
// Given an array of integers, return indices of the two numbers 
// such that they add up to a specific target.
// You may assume that each input would have exactly one solution, 
// and you may not use the same element twice.

class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $count=0;
        while($count<count($nums)-1){
            $inner_count = $count + 1;
            while($inner_count<count($nums)){
                if($nums[$count] + $nums[$inner_count] == $target){
                    return [$count,$inner_count];
                }
                $inner_count++;
            }
            $count++;
        }
        
    }
}

$solution_test = new Solution;
var_dump($solution_test->twoSum([2, 7, 11, 15],9));
var_dump($solution_test->twoSum([12, -3, 2, 5],2));
?>





