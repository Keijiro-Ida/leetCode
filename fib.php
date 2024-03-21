<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {

        if($n <= 1) {
            return $n;
        } else {
            return $this->fib($n-1) + $this->fib($n-2);
        }
    }
}
