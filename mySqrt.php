<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $result = 0;

        while($x >= $result * $result) {
            $result++;
        }

        return $result-1;
    }
}
