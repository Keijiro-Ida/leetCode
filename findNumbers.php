<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $evenDigitCount = 0;

        foreach($nums as $num) {
            $digitCount = strlen((string)$num);

            if($digitCount % 2 == 0) {
                $evenDigitCount++;
            }
        }

        return $evenDigitCount;
    }
}
