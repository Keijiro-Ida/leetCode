<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function convertToBase7($num) {
        if($num == 0) {
            return "0";
        }
        $result = "";
        $isNegative = false;

        if($num < 0) {
            $isNegative = true;
            $num = abs($num);
        }

        while($num > 0) {
            $cap = $num % 7;
            $num = (int)($num / 7);
            $result = $cap . $result;
        }


        return ($isNegative ? "-": "") . $result;
    }
}
