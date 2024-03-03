<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        $sArr = explode(' ', $s);
        $result = array_filter($sArr, function($x) { return !empty($x);});
        return count($result);
    }
}
