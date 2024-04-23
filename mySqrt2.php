<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {

        $low = 0;
        $high = $x;

        $epsilon = 0.1;

        while($high - $low > $epsilon) {
            $mid = ($low + $high) / 2;
            $square = $mid * $mid;

            if($square < $x) {
                $low = $mid;
            } else if($square > $x) {
                $high = $mid;
            } else {
                return (int)$mid;
            }

        }

        $num = (int)$high;
        if($num * $num > $x) {
            return $num - 1;
        }
        return $num;
    }
}
