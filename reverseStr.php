<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $len = strlen($s);
        for($i = 0; $i < $len; $i += 2 * $k) {
            $substr = substr($s, $i, $k);
            $reversed = strrev($substr);
            $s = substr($s, 0, $i) . $reversed . substr($s, $i + $k);
        }
        return $s;
    }
}
