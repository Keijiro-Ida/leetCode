<?php

class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {

        $left = 0;
        $right = count($letters) - 1;

        while($left <= $right) {
            $mid = intdiv($left + $right, 2);

            if($letters[$mid] > $target) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return $letters[$left % count($letters)];
    }
}
