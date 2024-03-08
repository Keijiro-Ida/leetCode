<?php

class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y) {

        $xor = $x ^ $y;

        return $this->countBits($xor);
    }

    function countBits($n) {

        $cnt = 0;

        while($n) {
            $n &= $n-1;
            $cnt++;
        }
        return $cnt;
    }
}
