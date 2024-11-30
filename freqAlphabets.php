<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function freqAlphabets($s) {

        return preg_replace_callback('/(\d{2}#|\d)/', function($matches) {
            $num = intval(str_replace('#', '', $matches[0]));
            return chr($num + 96);
        }, $s);
    }
}
