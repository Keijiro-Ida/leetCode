<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        if(end($digits) != 9) {
            $digits[count($digits)-1] = end($digits)+1;
            return $digits;
        }else {
            return str_split(bcadd(implode($digits),1));
        }
    }
}
