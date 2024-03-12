<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $count = 0;
        $max = 0;
        foreach($nums as $num) {
            if($num == 1) {
                $count++;
                if($count > $max) $max = $count;
            } else {
                $count = 0;
            }
        }
        return $max;
    }
}
