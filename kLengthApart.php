<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function kLengthApart($nums, $k) {
        $prevIndex = -1;

        foreach($nums as $i => $num) {
            if($num == 1) {
                if($prevIndex !== -1 && $i - $prevIndex - 1 < $k) {
                    return false;
                }
                $prevIndex = $i;
            }
        }

        return true;
    }
}
