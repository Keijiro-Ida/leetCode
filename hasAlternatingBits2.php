<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function hasAlternatingBits($n) {
        $binary = decbin($n);

        for($i = 1; $i < strlen($binary); $i++) {
            if($binary[$i] === $binary[$i - 1]) return false;
        }
        return true;
    }
}
