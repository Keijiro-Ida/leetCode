<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $arr = array_count_values($nums);

        foreach($arr as $count) {
            if($count >= 2) {
                return true;
            }
        }
        return false;
    }
}
