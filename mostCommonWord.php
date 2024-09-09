<?php

class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned) {
        $cleanParagraph = strtolower(preg_replace('/[!?\'",;.\s]+/', ' ', $paragraph));

        $words = array_filter(explode(' ', $cleanParagraph));

        $bannedWords = array_flip($banned);

        $wordsCount = array_count_values($words);

        foreach($wordsCount as $word => $count) {
            if(isset($bannedWords[$word])) {
                unset($wordsCount[$word]);
            }
        }

        arsort($wordsCount);

        return key($wordsCount);
    }
}
