<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function projectionArea($grid) {

        $n = count($grid);
        $xy = 0;
        $yz = 0;
        $xz = 0;

        for($i = 0; $i < $n; $i++) {
            $maxRow = 0;
            $maxCol = 0;

            for($j = 0; $j < $n; $j++) {
                if($grid[$i][$j] > 0) {
                    $xy++;
                }

                $maxRow = max($maxRow, $grid[$i][$j]);
                $maxCol = max($maxCol, $grid[$j][$i]);
            }

            $yz += $maxRow;
            $xz += $maxCol;
        }

        return $xy + $yz + $xz;
    }
}
