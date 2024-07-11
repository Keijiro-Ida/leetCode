<?php


class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function convertToBase7($num) {

        if($num == 0) return "0";

        $isNegative = $num < 0 ? true: false;
        $num = abs($num);

        $base = "";
        while($num != 0) {
            $base  = $num % 7  . $base;
            $num = (int)($num / 7);
        }

       return $isNegative ? "-" . $base : $base;
    }
}
