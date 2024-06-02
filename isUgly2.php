<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {

        if($n == 0) return false;

        $facters = [2, 3, 5];

        foreach($facters as $facter) {
                while($n % $facter == 0) {
                    $n /= $facter;
                }
        }

        return $n == 1;
    }
}
