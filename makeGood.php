<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function makeGood($s) {
        $stack = [];

        for($i = 0; $i < strlen($s); $i++) {
            $currentChar = $s[$i];

            if(!empty($stack) && abs(ord($stack[count($stack) - 1]) - ord($currentChar)) == 32) {
                array_pop($stack);
            } else {
                $stack[] = $currentChar;
            }
        }

        return implode("", $stack);
    }
}
