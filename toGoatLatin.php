<?php

class Solution {

    /**
     * @param String $sentence
     * @return String
     */
    function toGoatLatin($sentence) {
        $words = explode(' ', $sentence);
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        foreach($words as $index => &$word) {
            if(in_array($word[0], $vowels)) {
                $word .= 'ma';
            } else {
                $word = substr($word, 1) . $word[0] . 'ma';
            }

            $word .= str_repeat('a', $index + 1);
        }

        return implode(' ', $words);
    }
}
