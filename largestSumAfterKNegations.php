<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function largestSumAfterKNegations($nums, $k) {
        sort($nums);

        for($i = 0; $i < count($nums); $i++) {
            if($k > 0 && $nums[$i] < 0) {
                $nums[$i] = -$nums[$i];
                $k--;
            }
        }

        if($k % 2 == 1) {
            $minIndex = array_search(min($nums), $nums);
            $nums[$minIndex] = -$nums[$minIndex];
        }

        return array_sum($nums);
    }
}
