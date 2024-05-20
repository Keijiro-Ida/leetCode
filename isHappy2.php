<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {

        $seenNumbers = [];

        while($n != 1 && !in_array($n, $seenNumbers)) {
            $seenNumbers[] = $n;
            $n = $this->getSum($n);
        }

        return $n == 1;

    }

    function getSum($number) {
        $totalSum = 0;

        while($number > 0) {
            $digit = $number % 10;
            $totalSum += $digit * $digit;
            $number = (int)($number / 10);
        }
        return $totalSum;
    }
}
