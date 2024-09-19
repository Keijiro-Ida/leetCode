<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function binaryGap($n) {

        $binary = decbin($n);
        $max = 0;
        $prev = -1;
        $len = strlen($binary);

        for($i = 0; $i < $len; $i++) {
            if($binary[$i] == '1') {
                if($prev != -1) {
                    $count = $i - $prev;
                    $max = max($max, $count);
                }
                 $prev = $i;
            }
        }

        return $max;
    }
}
