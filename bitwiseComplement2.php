<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function bitwiseComplement($n) {

        $binary = decbin($n);

        $complement = '';

        for($i = 0; $i < strlen($binary); $i++) {
            if($binary[$i] == '1') {
                $complement .= '0';
            } else {
                $complement .= '1';
            }
        }

        return bindec($complement);
    }
}
