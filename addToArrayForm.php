<?php

class Solution {

    /**
     * @param Integer[] $num
     * @param Integer $k
     * @return Integer[]
     */
    function addToArrayForm($num, $k) {

        $i = count($num) - 1;

        while($k > 0 && $i >= 0) {
            $num[$i] += $k;
            $k = intdiv($num[$i], 10);
            $num[$i] %= 10;
            $i--;
        }

        while($k > 0) {
            array_unshift($num, $k % 10);
            $k = intdiv($k, 10);
        }

        return $num;
    }
}
