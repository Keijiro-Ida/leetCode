<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeOuterParentheses($s) {
        $result = "";
        $count = 0;

        for($i = 0; $i < strlen($s); $i++) {
            if($s[$i] == ')') {
                $count--;
            }
            if($count > 0) {
                $result .= $s[$i];
            }
            if($s[$i] == '(') {
                $count++;
            }
        }

        return $result;
    }
}
