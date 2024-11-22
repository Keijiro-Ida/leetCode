<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function minTimeToVisitAllPoints($points) {

        $result = 0;

        for($i = 1; $i < count($points); $i++) {
            $dx = abs($points[$i][0] - $points[$i - 1][0]);
            $dy = abs($points[$i][1] - $points[$i - 1][1]);
            $result += max($dx, $dy);

        }

        return $result;
    }
}
