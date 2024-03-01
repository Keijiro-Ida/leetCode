<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $nums = array_unique($nums);
        rsort($nums);

        return isset($nums[2]) ? $nums[2] : $nums[0];

    }
}
