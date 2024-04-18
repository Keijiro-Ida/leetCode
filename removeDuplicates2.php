<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        $count = count($nums);

        $i = 0;
        for($j = 0; $j < $count; $j++) {
            if($nums[$j] !== $nums[$i]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }

        return $i+1;
    }
}
