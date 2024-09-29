<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function smallestRangeI($nums, $k) {
        $max = max($nums);
        $min = min($nums);

        $diff = $max - $min;

        if($diff >= 2 * $k) {
            return $diff - 2 * $k;
        }

        return 0;
    }
}
