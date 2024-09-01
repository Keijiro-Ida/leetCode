<?php

class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function countPrimeSetBits($left, $right) {
        $count = 0;

        $primeSet = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31];

        for($i = $left; $i <= $right; $i++) {
            $setBits = substr_count(decbin($i), '1');

            if($this->isPrime($setBits)) {
                $count++;
            }
        }

        return $count;
    }

    function isPrime($num) {
        if($num == 1) return false;
        if($num == 2) return true;
        if($num  % 2 === 0) return false;

        $sqrtNum = sqrt($num);

        for($i = 3; $i <= $sqrtNum; $i++) {
            if($num % $i === 0) return false;
        }

        return true;
    }
}
