<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    function matrixReshape($mat, $r, $c) {

        $m = count($mat);
        $n = count($mat[0]);

        if($r * $c != $m * $n) {
            return $mat;
        }

        $newMat = [];
        $row = [];

        foreach($mat as $rowArray) {
            foreach($rowArray as $element) {
                $row[] = $element;

                if(count($row) == $c) {
                    $newMat[] = $row;
                    $row = [];
                }
            }
        }

        return $newMat;
    }
}
