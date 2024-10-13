<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function largestPerimeter($nums) {

        sort($nums);

        for($i = count($nums) - 3; $i >= 0; $i--) {
            $a = $nums[$i];
            $b = $nums[$i + 1];
            $c = $nums[$i + 2];

            if($a + $b > $c) {
                return $a + $b + $c;
            }
        }

        return 0;
    }
}
