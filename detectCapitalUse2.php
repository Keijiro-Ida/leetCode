<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {

        if (preg_match('/^[A-Z]+$/', $word)) {
        return true;
        }

        if (preg_match('/^[a-z]+$/', $word)) {
            return true;
        }

        if (preg_match('/^[A-Z][a-z]+$/', $word)) {
            return true;
        }

        return false;
    }
}
