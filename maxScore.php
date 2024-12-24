<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxScore($s) {
        $n = strlen($s);
        $maxScore = 0;

        for($i = 1; $i < $n; $i++) {
            $left = substr($s, 0, $i);
            $leftZeros = substr_count($left, '0');

            $right = substr($s, $i);
            $rightOnes = substr_count($right, '1');

            $currentScore = $leftZeros + $rightOnes;
            $maxScore = max($maxScore, $currentScore);

        }
        return $maxScore;
    }
}
