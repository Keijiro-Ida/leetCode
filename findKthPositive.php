<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer
     */
    function findKthPositive($arr, $k) {
        $max = max($arr) + $k;
        $missing = [];
        $index = 0;

        for($i = 1; $i <= $max; $i++) {
            if($index < count($arr) && $i == $arr[$index]) {
                $index++;
            } else {
                $missing[] = $i;
            }

            if(count($missing) == $k) {
                return $missing[$k - 1];
            }
        }
    }
}
