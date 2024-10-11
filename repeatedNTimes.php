<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function repeatedNTimes($nums) {

        $count = count($nums);
        $n = $count / 2;

        $numsCount = array_count_values($nums);

        foreach($numsCount as $key => $value) {
            if($value == $n) {
                return $key;
            }
        }
    }
}
