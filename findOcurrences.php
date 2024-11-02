<?php

class Solution {

    /**
     * @param String $text
     * @param String $first
     * @param String $second
     * @return String[]
     */
    function findOcurrences($text, $first, $second) {
        $words = explode(' ', $text);
        $result = [];

        for($i = 0; $i < count($words) - 2; $i++) {
            if($words[$i] == $first && $words[$i + 1] == $second) {
                $result[] = $words[$i + 2];
            }
        }

        return $result;
    }
}
