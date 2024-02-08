<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        foreach($nums as $index => $num) {
            if($num === 0) {
                unset($nums[$index]);
                $nums[] = 0;
            }
        }
    }
}
