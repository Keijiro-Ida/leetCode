<?php

class Solution {

    /**
     * @param Integer[] $timeSeries
     * @param Integer $duration
     * @return Integer
     */
    function findPoisonedDuration($timeSeries, $duration) {
        $n = count($timeSeries);
        if($n == 0) return 0;

        $totalDuration = 0;

        for($i = 0; $i < $n - 1; $i++) {
            $totalDuration += min($duration, $timeSeries[$i + 1] - $timeSeries[$i]);
        }

        return $totalDuration;
    }
}
