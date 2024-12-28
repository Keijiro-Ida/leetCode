<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxPower($s) {
        $max = 1;
        $count = 1;

        for($i = 1; $i < strlen($s); $i++) {
            if($s[$i] == $s[$i - 1]) {
                $count++;
                $max = max($max, $count);
            } else {
                $count = 1;
            }
        }

        return $max;


    }
}
