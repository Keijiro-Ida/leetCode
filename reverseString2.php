<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {

        $h = count($s);
        $l = intval($h/2);

        for($i = 0; $i < $l; $i++) {
            $tmp = $s[$i];
            $s[$i] = $s[$h-($i+1)];
            $s[$h-($i+1)] = $tmp;
        }
    }
}
