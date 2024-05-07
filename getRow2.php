<?php

class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        if($rowIndex == 0) return [1];

        $triangle = [[1]];

        for($i = 1; $i <= $rowIndex; $i++) {
            $prevRow = $triangle[$i-1];
            $newRow = [1];
            for($j = 1; $j < count($prevRow); $j++) {
                $newRow[] = $prevRow[$j-1] + $prevRow[$j];
            }
            $newRow[] = 1;
            $triangle[] = $newRow;
        }

        return $triangle[$rowIndex];
    }
}
