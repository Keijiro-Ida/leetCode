<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        $aCount = 0;
        $lCount = 0;

        for($i = 0; $i < strlen($s); $i++){

            if($s[$i] == 'A') {
                $aCount++;
                $lCount = 0;
                if($aCount == 2) return false;
            }
            if($s[$i] == 'L') {
                $lCount++;
                if($lCount == 3) return false;
            }
            if($s[$i] == 'P') {
                $lCount = 0;
            }
        }
        return true;
    }

}
