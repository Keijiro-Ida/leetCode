<?php

class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $triangle = [[1]];

        if($rowIndex == 0) return $triangle[$rowIndex];

        for($i=0; $i < $rowIndex; $i++) {
            $newRow = [1];
            $prevRow = end($triangle);

            for($j=1; $j<count($prevRow); $j++) {
                $newRow[] = $prevRow[$j-1] + $prevRow[$j];
            }
            $newRow[] = 1;
            $triangle[] = $newRow;
        }

        return $triangle[$rowIndex];


    }
}
