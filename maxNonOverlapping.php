<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function maxNonOverlapping($nums, $target) {
        $prefixSum = [0];
        $currentSum = 0;
        $count = 0;

        foreach($nums as $num) {
            $currentSum += $num;
            if(in_array($currentSum - $target, $prefixSum)) {
                $count++;
                $prefixSum = [0];
                $currentSum = 0;
            } else {
                $prefixSum[] = $currentSum;
            }
        }

        return $count;
    }
}
