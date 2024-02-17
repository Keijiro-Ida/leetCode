<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {

        $strMapping = [
            'a', 'i', 'u', 'e', 'o', 'A', 'I' ,'U', 'E', 'O'
        ];
        $tmp = [];
        for($i = 0; $i < strlen($s); $i++) {
            if(in_array($s[$i], $strMapping)) $tmp[] = $s[$i];
        }
        $tmp = array_reverse($tmp);
        for($i = 0; $i < strlen($s); $i++) {
            if(in_array($s[$i], $strMapping)) {
                $char = array_shift($tmp);
                $s[$i] = $char;
            }
        }

        return $s;
    }
}
