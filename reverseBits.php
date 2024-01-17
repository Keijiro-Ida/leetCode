<?php

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        $result = '';
        for($i = 0; $i < 32; $i++) {
            $result .= $n & 1;
            $n = $n >> 1;
        }
        return bindec($result);
    }
}
