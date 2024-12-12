<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $sorted = $nums;
        sort($sorted);
        $countedNums = array_count_values($nums);

        $cumulative = [];
        $total = 0;

        foreach($sorted as $num) {
            if(!isset($cumulative[$num])) {
                $cumulative[$num] = $total;
                $total += $countedNums[$num];
            }
        }

        $result = [];
        foreach($nums as $num) {
            $result[] = $cumulative[$num];
        }

        return $result;

    }
}
