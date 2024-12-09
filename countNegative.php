<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $m = count($grid);
        $n = count($grid[0]);
        $count = 0;
        $row = 0;
        $col = $n - 1;

        for($row = 0; $row < $m; $row++) {
            while($col >= 0 && $grid[$row][$col] < 0) {
                $col--;
            }

            $count += ($n - $col - 1);
        }

        return $count;
    }
}
