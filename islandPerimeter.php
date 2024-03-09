<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid) {
        $count = 0;
        for($i = 0; $i < count($grid); $i++) {
            for($j = 0; $j < count($grid[$i]); $j++) {

                if($grid[$i][$j] != 1) continue;
                if(!isset($grid[$i-1][$j]) || $grid[$i-1][$j] == 0) $count++;
                if(!isset($grid[$i][$j-1]) || $grid[$i][$j-1] == 0) $count++;
                if(!isset($grid[$i+1][$j]) || $grid[$i+1][$j] == 0) $count++;
                if(!isset($grid[$i][$j+1]) || $grid[$i][$j+1] == 0) $count++;
            }
        }
        return $count;
    }
}
