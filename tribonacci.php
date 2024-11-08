<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function tribonacci($n) {

        if($n == 0) {
            return 0;
        } elseif($n == 1 || $n == 2) {
            return 1;
        }

        $t0 = 0;
        $t1 = 1;
        $t2 = 1;

        for($i = 3; $i <= $n; $i++) {
            $t_next = $t0 + $t1 + $t2;
            $t0 = $t1;
            $t1 = $t2;
            $t2 = $t_next;
        }

        return $t2;
    }
}
