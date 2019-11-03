<?php
// https://leetcode.com/problems/longest-common-prefix/
// Write a function to find the longest common prefix string amongst an array of strings.
// If there is no common prefix, return an empty string "".
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = "";

        for($i=0;$i<strlen($strs[0]);$i++){
            $char1=substr($strs[0],$i,1);

            for($x=1;$x<count($strs);$x++){
                $char2=substr($strs[$x],$i,1);
                if(!$char2 || $char1 !== $char2){
                    return $prefix;
                }
            }
            $prefix=$prefix . $char1;
        }
        return $prefix;
    }
}
$solution_test = new Solution;
var_dump($solution_test->longestCommonPrefix(["flower","flow","flight"]));
var_dump($solution_test->longestCommonPrefix(["dog","racecar","car"]));
var_dump($solution_test->longestCommonPrefix(["a"]));
?>