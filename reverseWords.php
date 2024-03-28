<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = explode(" ", $s);
        $tmp =[];
        foreach($words as $word) {
            $tmp[] = strrev($word);
        }

        return implode(" ", $tmp);
    }
}
