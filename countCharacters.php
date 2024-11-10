<?php

class Solution {

    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    function countCharacters($words, $chars) {
        $charCount = array_count_values(str_split($chars));
        $count = 0;

        foreach($words as $word) {
            $wordCount = array_count_values(str_split($word));
            $canForm = true;

            foreach($wordCount as $char => $value) {
                if(($charCount[$char] ?? 0) < $value) {
                    $canForm = false;
                    break;
                }
            }

            if($canForm) {
                $count += strlen($word);
            }
        }

        return $count;
    }
}
