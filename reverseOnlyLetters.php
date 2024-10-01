<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseOnlyLetters($s) {
        $chars = str_split($s);

        $letters = [];
        foreach($chars as $char) {
            if(ctype_alpha($char)) {
                $letters[] = $char;
            }
        }

        $letters = array_reverse($letters);

        $index = 0;

        for($i = 0; $i < count($chars); $i++) {
            if(ctype_alpha($chars[$i])) {
                $chars[$i] = $letters[$index];
                $index++;
            }
        }

        return implode('', $chars);
    }
}
