<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {

        $result = "";
        $carry = 0;
        $i = strlen($a) - 1;
        $j = strlen($b) - 1;

        while($i >= 0|| $j >= 0 || $carry > 0) {
            $sum = $carry;

            if($i >= 0) {
                $sum += $a[$i] === '1' ? 1 : 0;
                $i--;
            }
            if($j >= 0) {
                $sum += $b[$j] === '1' ? 1 : 0;
                $j--;
            }

            $result = ($sum % 2 ? '1' : '0') . $result;
            $carry = intdiv($sum, 2);

        }

        return $result;
    }
}
