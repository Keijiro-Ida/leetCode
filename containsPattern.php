<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $m
     * @param Integer $k
     * @return Boolean
     */
    function containsPattern($arr, $m, $k) {
        $n = count($arr);

        for($i = 0; $i <= $n - $m * $k; $i++) {
            $pattern = array_slice($arr, $i, $m);
            $count = 1;

            for($j = 1; $j <= $k; $j++) {
                $nextPattern = array_slice($arr, $i + $j * $m, $m);
                if($pattern == $nextPattern) {
                    $count++;
                } else {
                    break;
                }
            }
            if($count >= $k) {
                return true;
            }
        }


        return false;
    }
}
