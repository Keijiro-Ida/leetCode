<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function numSpecial($mat) {
        $m = count($mat);
        $n = count($mat[0]);

        $rowCount = array_fill(0, $m, 0);
        $colCount = array_fill(0, $n, 0);

        for($i = 0; $i < $m; $i++) {
            for($j = 0; $j < $n; $j++) {
                if($mat[$i][$j] == 1) {
                    $rowCount[$i]++;
                    $colCount[$j]++;
                }
            }
        }

        $specialCount = 0;

        for($i = 0; $i < $m; $i++) {
            for($j = 0; $j < $n; $j++) {
                if($mat[$i][$j] == 1 && $rowCount[$i] == 1 && $colCount[$j] == 1) {
                    $specialCount++;
                }
            }
        }

        return $specialCount;
    }
}
