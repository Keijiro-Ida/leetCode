<?php

class Solution {

    /**
     * @param Integer[] $distance
     * @param Integer $start
     * @param Integer $destination
     * @return Integer
     */
    function distanceBetweenBusStops($distance, $start, $destination) {
        if($start == $destination)return 0;

        if($start > $destination) {
            list($start, $destination) = array($destination, $start);
        }
        $clockwiseDistance = array_sum(array_slice($distance, $start, $destination - $start));

        $totalDistance = array_sum($distance) - $clockwiseDistance;

        return min($clockwiseDistance, $totalDistance);

    }
}
