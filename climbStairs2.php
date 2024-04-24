<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {

       if($n == 1) return 1;
       if($n == 2) return 2;

       $dp = [1,2];

       for($i = 2; $i < $n; $i++) {
            $dp[] = $dp[$i-2] + $dp[$i-1];
       }

       return $dp[$n-1];

    }
}
