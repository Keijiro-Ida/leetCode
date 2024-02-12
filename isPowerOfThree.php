<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        $sum = 1;

        while($n >= $sum) {
            if($n == $sum) return true;
            $sum *= 3;
        }

        return false;
    }
}
