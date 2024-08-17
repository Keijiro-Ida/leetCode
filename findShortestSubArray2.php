<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findShortestSubArray($nums) {

        $freq = [];
        $firstIndex = [];
        $laseIndex = [];

        foreach($nums as $index => $num) {
            if(!isset($freq[$num])) {
                $freq[$num] = 0;
                $firstIndex[$num] = $index;
            }
            $freq[$num]++;
            $lastIndex[$num] = $index;
        }

        $maxCount = max($freq);
        $minLength = PHP_INT_MAX;

        foreach($freq as $num => $count) {
            if($count == $maxCount) {
                $minLength = min($minLength, $lastIndex[$num] - $firstIndex[$num] + 1);
            }
        }
        return $minLength;
    }
}
