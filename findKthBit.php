<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return String
     */
    function findKthBit($n, $k) {

        if($n == 1) {
            return "0";
        }

        $length = (1 << $n) - 1;
        $mid = ($length + 1) / 2;

        if($k == $mid) {
            return "1";
        } else if($k < $mid) {
            return $this->findKthBit($n - 1, $k);
        } else {
            $new_k = $length - $k + 1;
            $bit = $this->findKthBit($n - 1, $new_k);
            return $bit === "0" ? "1" : "0";
        }

    }
}
