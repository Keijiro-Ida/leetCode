<?php

class Solution {

    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {

        $words = explode(" ", $sentence);
        $pattern = '/^' . preg_quote($searchWord, '/') . '/';

        foreach($words as $index => $word) {
            if(preg_match($pattern, $word)) {
                return $index + 1;
            }
        }

        return -1;
    }
}
