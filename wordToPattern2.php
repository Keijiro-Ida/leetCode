<?php

class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
       $patterns = str_split($pattern);
       $s_list = explode(' ', $s);

       if(count($patterns) !== count($s_list)) return false;

       $patternToWord = [];
       $wordToPattern = [];

        foreach($patterns as $index => $char) {
            $word = $s_list[$index];

            if(isset($patternToWord[$char])) {
                if($patternToWord[$char] !== $word) return false;
            } else {
                if(isset($wordToPattern[$word]) && $wordToPattern[$word] !== $char) return false;

                $patternToWord[$char] = $word;
                $wordToPattern[$word] = $char;
            }
        }

        return true;
    }
}
