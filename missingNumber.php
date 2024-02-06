<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {

        $countArr = array_count_values($nums);

        for($i = 0; $i <= count($nums); $i++) {

            if(!isset($countArr[$i])) return $i;
        }
    }
}
