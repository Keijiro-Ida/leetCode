<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function getNoZeroIntegers($n) {
        for($a = 1;$a < $n; $a++) {
            $b = $n - $a;

            if(!strpos((string)$a, '0') && !strpos((string)$b, '0')) {
                return [$a, $b];
            }
        }
        return [];
    }
}
