<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {

        $ans = [];

        for($i = 0; $i <= $n; $i++) {
            $bin = decbin($i);
            $count = substr_count($bin, '1');
            $ans[] = $count;
        }
        return $ans;
    }
}
