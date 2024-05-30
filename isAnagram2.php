<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {

        if(strlen($s) !== strlen($t)) return false;

        return array_count_values(str_split($s)) == array_count_values(str_split($t));
    }
}
