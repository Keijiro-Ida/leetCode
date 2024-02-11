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

        $mappingArr = [];

        foreach($arr as $index => $char) {

            if($mappingArr[$char] || in_array($sArr[$index], $mappingArr)) {
                if($sArr[$index] !== $mappingArr[$char]) return false;
            } else {
                $mappingArr[$char] = $sArr[$index];
            }
        }

        return true;
    }
}
