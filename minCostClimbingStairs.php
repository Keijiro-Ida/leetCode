<?php

class Solution {

    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minCostClimbingStairs($cost) {

        $n = count($cost);
        $dp = array_fill(0, $n + 1, 0);

        for($i = 2; $i <= $n; $i++) {
            $dp[$i] = min($dp[$i - 1] + $cost[$i - 1], $dp[$i - 2] + $cost[$i - 2]);
        }

        return $dp[$n];
    }
}
