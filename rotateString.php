<?php

class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function rotateString($s, $goal) {
        if(strlen($s) != strlen($goal)) return false;


        //return strpos($s . $s, $goal) !== false;
         $n = strlen($s);
        for($i = 0; $i < $n; $i++) {
            $shifted = substr($s, $i) . substr($s, 0, $i);
            if($shifted === $goal) return true;
        }

        return false;
    }
}
