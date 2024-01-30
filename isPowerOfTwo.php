<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {

        $sum = 1;

        while($n >= $sum) {

            if($n == $sum) return true;
            $sum *= 2;
        }

        return false;
    }
}
