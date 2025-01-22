<?php

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function thousandSeparator($n) {
        $str = strval($n);
        $reversed = strrev($str);

        $parts = str_split($reversed, 3);
        $result = implode(".", $parts);

        return strrev($result);
    }
}
