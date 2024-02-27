<?php


class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num) {

        if($num == 0) return "0";

        $hexChars =  "0123456789abcdef";
        $hex = "";

        $num = $num & 0xFFFFFFFF;

        while($num > 0) {
            $hex = $hexChars[$num % 16] . $hex;
            $num = floor($num / 16);
        }

        return $hex;
    }
}
