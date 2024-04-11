<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {

        $dict = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];
        $stack = [];
        for($i = 0; $i < strlen($s); $i++) {
            if(in_array($s[$i], ['(', '{', '['])) {
                array_push($stack, $s[$i]);
            } else {
                if(empty($stack) || array_pop($stack) != $dict[$s[$i]]) {
                    return false;
                }
            }
        }

        return empty($stack);
    }
}
