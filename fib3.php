<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if($n == 1) {
            return 1;
        }

        if($n == 0) {
            return 0;
        }

        return $this->fib($n - 2) + $this->fib($n - 1);
    }
}
