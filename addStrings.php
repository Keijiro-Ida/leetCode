<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        $total = bcadd($num1, $num2);
        return $total;
    }
}
