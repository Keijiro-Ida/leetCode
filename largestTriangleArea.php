<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Float
     */
    function largestTriangleArea($points) {
        $maxArea = 0;

        for($i = 0; $i < count($points); $i++) {
            for($j = 0; $j < count($points); $j++) {
                for($k = 0; $k < count($points); $k++) {
                    $area = $this->crossProductArea($points[$i], $points[$j], $points[$k]);

                    $maxArea = max($maxArea, $area);
                }
            }
        }

        return $maxArea;
    }


    private function crossProductArea($p1, $p2, $p3) {
        return abs(($p2[0] - $p1[0]) * ($p3[1] - $p1[1]) - ($p2[1] - $p1[1]) * ($p3[0] - $p1[0])) /2;
    }
}
