<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid) {
        $count = 0;
        foreach($grid as $i => $row) {
            foreach($row as $j => $cell) {
                if($cell == 0) continue;

                $count += 4
                    -($grid[$i-1][$j] ?? 0)
                    -($grid[$i][$j-1] ?? 0)
                    -($grid[$i+1][$j] ?? 0)
                    -($grid[$i][$j+1] ?? 0);
            }
        }
        return $count;
    }
}
