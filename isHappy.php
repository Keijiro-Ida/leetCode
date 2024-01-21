<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {

        $tmp = [];

        while($n != 1) {

            $n = array_sum(array_map(function($x) {
                return $x * $x;
            }, str_split($n)));

            if(isset($tmp[$n])) return false;

            $tmp[$n] = true;

        }

        return true;
    }
}
