<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums) {
        sort($nums);

        $n = count($nums);

        $max1 = $nums[$n-1] * $nums[$n-2] * $nums[$n-3];

        $max2 = $nums[0] * $nums[1] * $nums[$n-1];

        return max($max1, $max2);
    }
}
