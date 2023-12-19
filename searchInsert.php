<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {


        foreach($nums as $index => $num) {
            if($target <= $num) return $index;
        }

        return count($nums);

    }
}
