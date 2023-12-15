<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {

        $dict = [
            '(' => ')',
            '{' => '}',
            '[' => ']',
        ];

        $stack =[];

        for($i = 0; $i < strlen($s); $i++) {
            if($dict[$s[$i]]) {
                $stack[] = $dict[$s[$i]];
                continue;
            }
            if(array_pop($stack) !== $s[$i]) {
                return false;
            }
        }

       return empty($stack);
    }
}
