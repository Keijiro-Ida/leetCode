<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {

        $sum = array_sum($nums);
        $leftSum = 0;
        for($i = 0; $i < count($nums); $i++) {

            if($leftSum == $sum - $nums[$i] - $leftSum) {
                return $i;
            }

            $leftSum += $nums[$i];

        }
        return -1;
    }
}
