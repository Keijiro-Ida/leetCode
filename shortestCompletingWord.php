<?php

class Solution {

    /**
    * @param String $licensePlate
    * @param String[] $words
    * @return String
    */
    function shortestCompletingWord($licensePlate, $words) {
        $licensePlateLetters = array_count_values(str_split(strtolower(preg_replace('/[^a-z]/i', '', $licensePlate))));

        $shortestWord = '';

        foreach($words as $word) {
            $wordLetters = array_count_values(str_split(strtolower($word)));

            $containsAllLetters = true;

            foreach($licensePlateLetters as $letter => $count) {
                if(!isset($wordLetters[$letter]) || $wordLetters[$letter] < $count) {
                    $containsAllLetters = false;
                    break;
                }
            }

            if($containsAllLetters) {
                if($shortestWord === '' || strlen($shortestWord) > strlen($word)) {
                    $shortestWord = $word;
                }
            }

        }

        return $shortestWord;
    }
}
