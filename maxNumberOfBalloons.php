<?php

class Solution {

    /**
     * @param String $text
     * @return Integer
     */
    function maxNumberOfBalloons($text) {
        $textCounts = array_count_values(str_split($text));

        $requiredCounts = [
            'b' => 1,
            'a' => 1,
            'l' => 2,
            'o' => 2,
            'n' => 1
        ];

        $minInstances = PHP_INT_MAX;

        foreach($requiredCounts as $char => $count) {
            if(isset($textCounts[$char])) {
                $minInstances = min($minInstances, intdiv($textCounts[$char], $count));
            } else {
                return 0;
            }
        }

        return $minInstances;
    }
}
