<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLengthOfLCIS($nums) {
        $max = 0;
        $currentLength = 1;

        for($i = 1; $i < count($nums); $i++) {
            if($nums[$i-1] < $nums[$i]) {
                $currentLength++;

            } else {
                $max = max($currentLength, $max);
                $currentLength = 1;
            }

        }

        $max = max($currentLength, $max);
        return $max;
    }
}
