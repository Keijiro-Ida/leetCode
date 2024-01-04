<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $triangle = [];
        if($numRows == 0) return $triangle;

        $triangle[] = [1];

        for($i = 1; $i < $numRows; $i++) {
            $prevRow = end($triangle);
            $newRow = [1];
            for($j = 1; $j < count($prevRow); $j++) {
                $newRow[] = $prevRow[$j-1] + $prevRow[$j];
            }

            $newRow[] = 1;
            $triangle[] = $newRow;

        }
        return $triangle;
    }
}
