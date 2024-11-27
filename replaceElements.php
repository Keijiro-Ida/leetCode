<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr) {
        $n = count($arr);
        $maxFromRight = -1;

        for($i = $n - 1; $i >= 0; $i--) {
            $current = $arr[$i];
            $arr[$i] = $maxFromRight;
            $maxFromRight = max($maxFromRight, $current);
        }

        return $arr;
    }
}
