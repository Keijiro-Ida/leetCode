<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums) {
        sort($nums);

        $count = count($nums);

        $max1 = $nums[0] * $nums[1] * $nums[$count-1];
        $max2 = $nums[$count-1] * $nums[$count-2] * $nums[$count-3];

        return max($max1, $max2);
    }
}
