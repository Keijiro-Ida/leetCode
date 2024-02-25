<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {

        $s_len = strlen($s);
        if($s_len == 0) return true;

        $j = 0;
        for($i = 0; $i < strlen($t); $i++) {
            if($s[$j] == $t[$i]) {
                $j++;
                if($j == $s_len) return true;
            }
        }
        return false;
    }
}
