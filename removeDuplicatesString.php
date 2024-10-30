<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicatesString($s) {
        $stack = [];

        for($i = 0; $i < strlen($s); $i++){

            $char = $s[$i];
            if(!empty($stack) && end($stack) == $char) {
                array_pop($stack);
            } else {
                $stack[] = $char;
            }
        }
        return implode('', $stack);
    }
}
