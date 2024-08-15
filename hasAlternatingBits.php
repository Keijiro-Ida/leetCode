<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function hasAlternatingBits($n) {
        $xor = $n ^ ($n >> 1);

        return ($xor & ($xor + 1)) == 0;
    }
}
