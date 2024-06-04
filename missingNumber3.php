<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {

        $missing = count($nums);
        foreach($nums as $i => $num) {
            $missing ^= $i ^ $num;
        }
        return $missing;
    }
}
