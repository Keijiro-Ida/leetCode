<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @param Integer $k
     * @return Integer[][]
     */
    function shiftGrid($grid, $k) {
        $m = count($grid);
        $n = count($grid[0]);
        $total = $m * $n;
        $k = $k % $total;

        $newGrid = array_fill(0, $m, array_fill(0, $n, 0));

        for($i = 0; $i < $m; $i++) {
            for($j = 0; $j < $n; $j++) {
                $newIndex = ($i * $n + $j + $k) % $total;
                $newRow = intdiv($newIndex, $n);
                $newCol = $newIndex % $n;
                $newGrid[$newRow][$newCol] = $grid[$i][$j];
            }
        }

        return $newGrid;
    }
}
