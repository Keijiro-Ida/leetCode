<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[][]
     */
    function transpose($matrix) {
        $transpose = [];

        for($i = 0; $i < count($matrix); $i++) {
            for($j = 0; $j < count($matrix[$i]); $j++) {
                $transpose[$j][$i] = $matrix[$i][$j];
            }
        }

        return $transpose;
    }
}
