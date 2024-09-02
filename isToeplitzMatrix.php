<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function isToeplitzMatrix($matrix) {

        $rows = count($matrix);
        $cols = count($matrix[0]);

        for($i = 1; $i < $rows; $i++) {
            for($j = 1; $j < $cols; $j++) {
                if(isset($matrix[$i-1][$j-1]) && $matrix[$i][$j] != $matrix[$i-1][$j-1]) {
                    return false;
                }
            }
        }

        return true;
    }
}
