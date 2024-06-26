<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {

        $map = [];

        for($i = 0; $i < count($nums); $i++) {
            if(isset($map[$nums[$i]])) {
                if($i - $map[$nums[$i]] <= $k) {
                    return true;
                }
            }
            $map[$nums[$i]] = $i;
        }
        return false;
    }
}
