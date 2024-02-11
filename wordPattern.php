<?php

class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $arr = str_split($pattern);
        $sArr = explode(' ', $s);

        if(count($arr) != count($sArr)) return false;

        $patternArr = [];
        $valueArr = [];

        foreach($arr as $index => $char) {
            if(isset($patternArr[$char]) && $patternArr[$char] !== $sArr[$index]) return false;
            if(isset($valueArr[$sArr[$index]]) && $valueArr[$sArr[$index]] !== $char) return false;
            $patternArr[$char] = $sArr[$index];
            $valueArr[$sArr[$index]] = $char;
        }

        return true;
    }
}
