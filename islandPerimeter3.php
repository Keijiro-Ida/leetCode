<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid) {
        $count = 0;

        foreach($grid as $i => $row) {
            foreach($row as $j => $column) {
                if ($column == 1) {
                    // 初期周囲長は4
                    $count += 4;

                    // 上方向の隣接セルが土地なら周囲長から2を引く
                    if (isset($grid[$i-1][$j]) && $grid[$i-1][$j] == 1) {
                        $count -= 2;
                    }

                    // 左方向の隣接セルが土地なら周囲長から2を引く
                    if (isset($grid[$i][$j-1]) && $grid[$i][$j-1] == 1) {
                        $count -= 2;
                    }
                }
            }
        }
        return $count;
    }
}
