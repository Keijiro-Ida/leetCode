<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $result = array_fill(0, count($nums), 0);
        $left = 0;
        $right = count($nums) - 1;
        $pos = count($nums) - 1;

        while($left <= $right) {
            $leftSquare = $nums[$left] ** 2;
            $rightSquare = $nums[$right] ** 2;

            if($leftSquare > $rightSquare) {
                $result[$pos] = $leftSquare;
                $left++;
            } else {
                $result[$pos] = $rightSquare;
                $right--;
            }
            $pos--;
        }

        return $result;
    }
}
