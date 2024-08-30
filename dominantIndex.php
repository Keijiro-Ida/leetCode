<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums) {

        $maxValue = max($nums);
        $maxIndex = array_search($maxValue, $nums);

        foreach($nums as $num) {
            if($num != $maxValue && $maxValue < $num * 2) {
                return -1;
            }
        }

        return $maxIndex;
    }
}
