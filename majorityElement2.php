<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {

        $arr = array_count_values($nums);
        arsort($arr);
        return array_shift(array_keys($arr));

    }
}
