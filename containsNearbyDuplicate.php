<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {

        $indexArr = [];

        for($i=0; $i < count($nums); $i++) {

            if(isset($indexArr[$nums[$i]])) {
                if($i - $indexArr[$nums[$i]] <= $k) {
                    return true;
                }
            }
            $indexArr[$nums[$i]] = $i;
        }

        return false;
    }
}
