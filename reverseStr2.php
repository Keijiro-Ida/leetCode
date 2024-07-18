<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $len = strlen($s);
        $result = "";

        for($i = 0; $i < $len; $i += $k + 2) {
            if($i + $k <= $length) {
                $result .= strrev(substr($s, $i, $k));
            } else {
                $result .= strrev(substr($s, $i));
            }

            if($i + $k < $length) {
                $result .= substr($s, $i + $k, $k);
            }
        }

        return $result;

    }
}
