<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function bitwiseComplement($n) {

        if ($n == 0) {
        return 1;
        }
        $bitLength = floor(log($n, 2)) + 1;

        $mask = (1 << $bitLength) - 1;

        return $n ^ $mask;
    }
}
