<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return Integer
     */
    function findLUSlength($a, $b) {

        if($a == $b) return -1;

        $aLen = strlen($a);
        $bLen = strlen($b);

        if($aLen != $bLen) {
            return $aLen > $bLen ? $aLen : $bLen;
        } else {
            return $aLen;
        }
    }
}
