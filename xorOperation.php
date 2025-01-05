<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start) {
        $result = 0;
        for($i = 0; $i < $n; $i++) {
            $value = $start + 2 * $i;
            $result ^= $value;
        }
        return $result;
    }
}
