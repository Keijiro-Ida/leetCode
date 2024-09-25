<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function surfaceArea($grid) {
        $n = count($grid);
        $result = 0;

          // 上下左右の隣接セルへの移動
        $directions = [
            [-1, 0],  // 上
            [1, 0],   // 下
            [0, -1],  // 左
            [0, 1]    // 右
        ];

        for ($i = 0; $i < $n; $i++) {
            for($j = 0; $j < $n; $j++) {
                if($grid[$i][$j] > 0) {
                    $result += $grid[$i][$j] * 6;

                    $result -= ($grid[$i][$j] - 1) * 2;

                    foreach ($directions as $d) {
                        $ni = $i + $d[0];
                        $nj = $j + $d[1];

                        if($ni >= 0 && $ni < $n && $nj >= 0 && $nj < $n) {
                            $result -= min($grid[$i][$j], $grid[$ni][$nj]);
                        }
                    }
                }
            }
        }

        return $result;
    }
}
