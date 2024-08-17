<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findShortestSubArray($nums) {

        $nums_count = array_count_values($nums);
        $max_count = max($nums_count);
        $max_keys = array_keys($nums_count, $max_count);

        $min_length = PHP_INT_MAX;
        foreach($max_keys as $key) {
            $first_index = array_search($key, $nums);
            $last_index = array_search($key, array_reverse($nums, true));
            $length = $last_index - $first_index + 1;
            $min_length = min($min_length, $length);
        }

        return $min_length;
    }
}
