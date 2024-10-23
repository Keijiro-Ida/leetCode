<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean[]
     */
    function prefixesDivBy5($nums) {

        $total = 0;
        $result = [];

        foreach($nums as $num) {

            $total = (($total << 1) + $num) % 5;
            $result[] = $total == 0;
        }

        return $result;
    }
}
