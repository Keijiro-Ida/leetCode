<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {

        $left = 0;
        $right = count($s) - 1;

        while($left < $right) {
            $tmp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $tmp;
            $left++;
            $right--;
        }

    }
}
