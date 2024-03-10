<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {

        $bin = (string)decbin($num);
        $newBin = "";

        foreach(str_split($bin) as $part) {
            if($part == '0') {
                $newBin .= "1";
            } else {
                $newBin .= '0';
            }
        }
        return bindec($newBin);
    }
}
