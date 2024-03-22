<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {

        if(ctype_upper($word)) return true;
        if(ctype_lower($word)) return true;

        if(ctype_upper($word[0]) && ctype_lower(substr($word, 1))) return true;

        return false;
    }
}
