<?php

class Solution {

    /**
     * @param Integer[][] $img
     * @return Integer[][]
     */
    function imageSmoother($img) {
        $result = [];
        $rows = count($img);
        $cols = count($img[0]);

        $offsets = [
            [-1, -1], [-1, 0], [-1, 1],
            [0, -1], [0, 0], [0, 1],
            [1, -1], [1, 0], [1, 1]
        ];


        for($i = 0; $i < $rows; $i++) {
            $result[$i] = [];
            for($j = 0; $j < $cols; $j++) {
                $sum = 0;
                $count = 0;

                foreach($offsets as $offset) {
                    $x = $i + $offset[0];
                    $y = $j + $offset[1];

                    if($x >= 0 && $x < $rows && $y >= 0 && $y < $cols) {
                        $sum += $img[$x][$y];
                        $count++;
                    }
                }

                $result[$i][$j] = floor($sum / $count);

            }
        }
        return $result;
    }
}
