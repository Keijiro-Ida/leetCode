<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {

        $digits = 1;
        $sum = 0;

        while($n > 0) {
            $num = $n % 10;
            $digits *= $num;
            $sum += $num;
            $n = intval($n / 10);
        }

        return $digits - $sum;
    }
}
