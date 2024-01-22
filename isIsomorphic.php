<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {

        $arrS = $arrT = [];

        for($i = 0; $i < strlen($s); $i++) {

            if(!isset($arrS[$s[$i]])) $arrS[$s[$i]] = $t[$i];
            if(!isset($arrT[$t[$i]])) $arrT[$t[$i]] = $s[$i];

            if($arrS[$s[$i]] != $t[$i]) return false;
            if($arrT[$t[$i]] != $s[$i]) return false;
        }
        return true;
    }
}
