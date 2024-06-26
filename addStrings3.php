<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {

       $i = strlen($num1) - 1;
       $j = strlen($num2) - 1;
       $carry = 0;
       $result = "";

       while($i >= 0 || $j >= 0 || $carry > 0) {
            $digit1 = $i >= 0 ? $num1[$i] - '0' : 0;
            $digit2 = $j >= 0 ? $num2[$j] - '0' : 0;

            $sum = $digit1 + $digit2 + $carry;
            $result = ($sum % 10) . $result;
            $carry = intdiv($sum, 10);

            $i--;
            $j--;
       }

       return $result;
    }
}
