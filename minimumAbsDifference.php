<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[][]
     */
    function minimumAbsDifference($arr) {
        sort($arr);

        $min_diff = PHP_INT_MAX;

        for($i = 0; $i < count($arr) - 1; $i++) {
            $diff = $arr[$i+1] - $arr[$i];
            if($min_diff > $diff) {
                $min_diff = $diff;
            }
        }

        $result = [];

        for($i = 0; $i < count($arr) - 1; $i++) {
            if($arr[$i+1] - $arr[$i] == $min_diff) {
                $result[] = [$arr[$i], $arr[$i + 1]];
            }
        }

        return $result;
    }
}
