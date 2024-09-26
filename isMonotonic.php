<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isMonotonic($nums) {
        $n = count($nums);
        $decreasing = true;
        $increasing = true;

        for($i = 1; $i < $n; $i++) {
            if($nums[$i] > $nums[$i - 1]) {
                $decreasing = false;
            }
            if($nums[$i] < $nums[$i - 1]) {
                $increasing = false;
            }
        }

        return $decreasing || $increasing;

    }
}
