<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {

        $count = count($nums);
        $sum = ($count * ($count + 1)) / 2;
        $sumNums = array_sum($nums);
        return $sum - $sumNums;
    }
}
