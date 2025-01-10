<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $count = array_count_values($nums);
        $totalPairs = 0;

        foreach($count as $n) {
            $totalPairs += ($n * ($n - 1)) / 2;
        }

        return $totalPairs;
    }
}
