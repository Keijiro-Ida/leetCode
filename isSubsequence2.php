<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {

       $s_index = 0;
       $t_index = 0;

       while($t_index < strlen($t)) {
        if($s_index == $t[$t_index]) {
            $s_index++;
        }
        $t_index++;
       }

       return $s_index == strlen($s);
    }
}
