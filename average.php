<?php

class Solution {

    /**
     * @param Integer[] $salary
     * @return Float
     */
    function average($salary) {
        $max = max($salary);
        $min = min($salary);

        $sum = array_sum($salary);
        return ($sum - $max - $min) / (count($salary) - 2);
    }
}
