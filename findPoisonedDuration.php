<?php

class Solution {

    /**
     * @param Integer[] $timeSeries
     * @param Integer $duration
     * @return Integer
     */
    function findPoisonedDuration($timeSeries, $duration) {
        if(empty($timeSeries)) return 0;
        $totalDuration = 0;
        $end = 0;
        foreach($timeSeries as $time) {
            if($time >= $end) {
                $totalDuration += $duration;
            } else {
                $totalDuration += ($time + $duration) - $end;
            }
            $end = $time + $duration;
        }
        return $totalDuration;
    }
}
