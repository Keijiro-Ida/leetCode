<?php

class Solution {

    /**
     * @param Integer[] $position
     * @return Integer
     */
    function minCostToMoveChips($position) {
        $oddCount = 0;
        $evenCount = 0;

        foreach($position as $value) {
            if($value % 2 == 0) {
                $oddCount++;
            } else {
                $evenCount++;
            }
        }

        return min($oddCount, $evenCount);
    }
}
