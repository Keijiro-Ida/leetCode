<?php

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @param Integer[][] $indices
     * @return Integer
     */
    function oddCells($m, $n, $indices) {
        $row = array_fill(0, $m, 0);
        $col = array_fill(0, $n, 0);

        foreach($indices as $index) {
            $row[$index[0]]++;
            $col[$index[1]]++;
        }

        $oddCount = 0;

        for($i = 0; $i < $m; $i++) {
            for($j = 0; $j < $n; $j++) {
                if(($row[$i] + $col[$j]) % 2 !== 0) {
                    $oddCount++;
                }
            }
        }

        return $oddCount;
    }
}
