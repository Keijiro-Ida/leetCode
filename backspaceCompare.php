<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {

        return $this->buildString($s) == $this->buildString($t);
    }

    function buildString($str) {

        $stack = [];
        for($i = 0; $i < strlen($str); $i++) {
            if($str[$i] == '#') {
                if(!empty($stack)) {
                    array_pop($stack);
                }
            } else {
                $stack[] = $str[$i];
            }
        }

        return implode('', $stack);
    }
}
