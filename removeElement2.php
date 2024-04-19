<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $k = 0;

        foreach($nums as $num) {
            if($val !== $num) {
                $nums[$k] = $val;
                $k++;
            }
        }

        array_splice($nums, $k);

        return $nums;
    }
}
