<?php

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @param Integer[][] $ops
     * @return Integer
     */
    function maxCount($m, $n, $ops) {
        $minRow = $m;
        $minCol = $n;

        foreach($ops as $op) {
            $minRow = min($minRow, $op[0]);
            $minCol = min($minCol, $op[1]);
        }

        return $minRow * $minCol;
    }
}
