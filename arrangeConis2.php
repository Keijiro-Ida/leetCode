<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $left = 0;
        $right = $n;

        while($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            $current = (int)($mid * ($mid + 1) / 2);

            if($current == $n) {
                return $mid;
            } elseif($current > $n) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return $right;
    }
}
