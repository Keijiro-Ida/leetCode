<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {

        $normalizedString = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));

        $reverseString = strrev($normalizedString);

        return $normalizedString == $reverseString;
    }
}
