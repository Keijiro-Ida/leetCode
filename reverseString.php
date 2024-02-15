<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {

        $str = implode($s);
        $s = str_split(strrev($str));

    }
}
