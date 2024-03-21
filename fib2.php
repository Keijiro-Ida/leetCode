<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {

        $array = [0, 1];

        for($i = 2; $i <= $n; $i++) {
            $array[$i] = $array[$i-1] + $array[$i-2];
        }

        return $array[$n];
    }
}
