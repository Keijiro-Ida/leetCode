<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $non_zero_index = 0;

        for($i = 0; $i < count($nums); $i++) {
            if($nums[$i] != 0) {
                $nums[$non_zero_index] = $nums[$i];
                $non_zero_index++;
            }
        }

        for($i = $non_zero_index; $i < count($nums); $i++) {
            $nums[$i] = 0;
        }

        return $nums;
    }
}
