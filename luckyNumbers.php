<?php


class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function luckyNumbers($matrix) {
        $luckyNumbers = [];
        $rowMins = [];

        foreach($matrix as $rowIndex => $row) {
            $minValue = min($row);
            $minIndex = array_search($minValue, $row);
            $rowMins[] = ['value' => $minValue, 'colIndex' => $minIndex];
        }

        $colMaxs = [];
        $cols = count($matrix[0]);

        for($col = 0; $col < $cols; $col++) {
            $maxValue = PHP_INT_MIN;
            foreach($matrix as $row) {
                $maxValue = max($maxValue, $row[$col]);
            }
            $colMaxs[$col] = $maxValue;
        }

        foreach($rowMins as $rowMin) {
            $minValue = $rowMin['value'];
            $colIndex = $rowMin['colIndex'];
            if($minValue == $colMaxs[$colIndex]) {
                $luckyNumbers[] = $minValue;
            }
        }

        return $luckyNumbers;
    }
}
