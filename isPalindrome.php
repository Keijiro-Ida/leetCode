<?php


class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {

        $str = preg_replace("/[^a-zA-Z0-9]/", "", $s);
        $strLower = strtolower($str);
        $strRev = strrev($strLower);

        return $strLower == $strRev;


    }
}
