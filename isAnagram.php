<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {

        $sArr = str_split($s);
        $tArr = str_split($t);

        // return array_count_values($sArr) == array_count_values($tArr);

        if(count($sArr) != count($tArr)) return false;

        sort($sArr);
        sort($tArr);

        for($i = 0; $i < count($sArr); $i++) {
            if($sArr[$i] != $tArr[$i]) return false;
        }
        return true;

    }
}
