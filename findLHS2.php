<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLHS($nums) {
        $count = array_count_values($nums);

        $max = 0;

        foreach($count as $key => $value) {
            if(isset($count[$key + 1])) {
                $max = max($max, $value + $count[$key + 1]);
            }
        }

        return $max;
    }
}
