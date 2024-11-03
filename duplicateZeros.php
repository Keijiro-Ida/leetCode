<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr) {
        $zeros = 0;
        $len = count($arr);

        foreach($arr as $value) {
            if($value == 0) {
                $zeros++;
            }
        }

        for($i = $len - 1; $i >= 0; $i--) {
            if($i + $zeros < $len) {
                $arr[$i + $zeros] = $arr[$i];
            }

            if($arr[$i] == 0) {
                $zeros--;
                if($i + $zeros < $len) {
                    $arr[$i + $zeros] = 0;
                }
            }
        }

        return $arr;
    }
}
