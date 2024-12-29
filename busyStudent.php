<?php

class Solution {

    /**
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @param Integer $queryTime
     * @return Integer
     */
    function busyStudent($startTime, $endTime, $queryTime) {

        $count = 0;

        for($i = 0; $i < count($startTime); $i++) {
            if($startTime[$i] <= $queryTime && $queryTime <= $endTime[$i]) {
                $count++;
            }
        }

        return $count;
    }
}
