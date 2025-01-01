<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $max1 = $max2 = 0;

        foreach($nums as $num) {
            if($num > $max1) {
                $max2 = $max1;
                $max1 = $num;
            } else if($num > $max2) {
                $max2 = $num;
            }
        }

        return ($max1 - 1) * ($max2 - 1);
    }
}
