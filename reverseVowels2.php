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
        $sArr = str_split($s);
        $tmp = [];
        $tmpPos = [];
        foreach($sArr as $key => $value) {
            if(in_array($value, $strMapping)) {
                $tmp[] = $value;
                $tmpPos[] = $key;
            }
        }
        $tmp = array_reverse($tmp);

        foreach($tmpPos as $pos => $key) {
            $sArr[$key] = $tmp[$pos];
        }

        return implode($sArr);
    }
}
