<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countBinarySubstrings($s) {
        $count = 0;
        $prev = 0;
        $cur = 1;

        for($i = 1; $i < strlen($s); $i++) {
            if($s[$i] == $s[$i - 1]) {
                $cur++;
            } else {
                $count += min($prev, $cur);
                $prev = $cur;
                $cur = 1;
            }
        }
        $count += min($prev, $cur);
        return $count;
    }
}
