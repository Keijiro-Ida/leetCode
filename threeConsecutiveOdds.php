<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function threeConsecutiveOdds($arr) {

        $count = 0;

        foreach($arr as $num) {
            if($num % 2 == 1) {
                $count++;
                if($count == 3) {
                    return true;
                }
            } else {
                $count = 0;
            }

        }
        return false;
    }
}
