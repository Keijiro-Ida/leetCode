<?php

class Solution {

    /**
     * @param Integer $turnedOn
     * @return String[]
     */
    function readBinaryWatch($turnedOn) {
        $results = [];

        for($h = 0; $h < 12; $h++) {
            for($m = 0; $m < 60; $m++) {
                if($this->countBits($h) + $this->countBits($m) == $turnedOn) {
                    $results[] = sprintf("%d:%02d", $h, $m);
                }
            }
        }

        return $results;

    }

    function countBits($num) {
        $count = 0;

        while($num > 0) {
            $count += $num & 1;
            $num >>= 1;
        }

        return $count;
    }
}
