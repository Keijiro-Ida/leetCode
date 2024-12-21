<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function stringMatching($words) {
        usort($words, function($a, $b) {
            return strlen($a) - strlen($b);
        });

        $result = [];

        for($i = 0; $i < count($words); $i++) {
            for($j = $i + 1; $j < count($words); $j++) {
                if(strpos($words[$j], $words[$i]) !== false) {
                    $result[] = $words[$i];
                    break;
                }
            }
        }

        return $result;
    }
}
