<?php

class Solution {

    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    function shortestToChar($s, $c) {

        $n = strlen($s);
        $answer = [];

        for($i = 0; $i < $n; $i++) {
            $minDistance = PHP_INT_MAX;

            for($j = 0; $j < $n; $j++) {
                if($s[$j] == $c) {
                    $minDistance = min($minDistance, abs($i - $j));
                }
            }

            $answer[] = $minDistance;
        }

        return $answer;
    }
}
