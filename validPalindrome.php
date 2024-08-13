<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s) {
        $left = 0;
        $right = strlen($s) - 1;

        while($left < $right) {
            if($s[$left] != $s[$right]) {
                return $this->isPalindrome(substr($s, $left + 1, $right - $left)) ||
                       $this->isPalindrome(substr($s, $left, $right - $left));
            }
            $left++;
            $right--;
        }
        return true;
    }

    function isPalindrome($s) {
        return $s == strrev($s);
    }
}
