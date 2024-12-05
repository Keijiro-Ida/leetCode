<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function removePalindromeSub($s) {
        if($s == "") {
            return 0;
        }

        if($this->isPaindrome($s)) {
            return 1;
        }

        return 2;
    }

    function isPaindrome($s) {
        return $s === strrev($s);
    }
}
