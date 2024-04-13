<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {

        $maxSum = 0;

        for($i = 0; $i < $k; $i++) {
            $maxSum += $nums[$i];
        }

        $currentSum = $maxSum;
        for($i = $k; $i < count($nums); $i++) {
            $currentSum += $nums[$i] - $nums[$i - $k];

            if($maxSum < $currentSum) {
                $maxSum = $currentSum;
            }
        }

        return $maxSum / $k;
    }
}
