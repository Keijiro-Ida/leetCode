<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        if(substr_count($s, 'A') >= 2) return false;

        if(strpos($s, 'LLL') !== false) return false;


        return true;
    }

}
