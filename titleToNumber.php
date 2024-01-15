<?php

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $arr = [];
        $i = 1;
        foreach(range('A', 'Z') as $index => $char) {
            $arr[$char] = $index+1;
        }

        $strArr = str_split(strrev($columnTitle));
        $result = 0;
        $bound = 1;
        foreach($strArr as $char) {
            $result += $arr[$char] * $bound;
            $bound *= 26;
        }

        return $result;

    }
}
