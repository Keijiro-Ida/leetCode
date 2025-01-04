<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $result = [];
        $runningSum = 0;
        foreach($nums as $num) {
            $runningSum += $num;
            $result[] = $runningSum;
        }

        return $result;
    }
}
