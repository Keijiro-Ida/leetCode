<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {

        $left = 0;
        $right = count($nums) - 1;

        while($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if($nums[$mid] == $target) {
                return $mid;
            } elseif($nums[$mid] < $target) {
                $left = $mid + 1;
            } elseif($nums[$mid] > $target) {
                $right = $mid - 1;
            }
        }

        return -1;
    }
}
