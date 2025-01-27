<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function diagonalSum($mat) {
        $n = count($mat);
        $total = 0;

        for($i = 0; $i < $n; $i++) {
            $total += $mat[$i][$i];
            $total += $mat[$i][$n - $i - 1];
        }

        if($n % 2 == 1) {
            $total -= $mat[floor($n / 2)][floor($n / 2)];
        }

        return $total;
    }
}
