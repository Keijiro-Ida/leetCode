<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $rows = 0;

        for($i = 1; $n > 0; $i++) {
            $n -= $i;
            if($n >= 0) {
                $rows++;
            }
        }
        return $rows;
    }
}
