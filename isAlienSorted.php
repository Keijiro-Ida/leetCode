<?php

class Solution {

    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    function isAlienSorted($words, $order) {

        $orderMap = [];
        for($i = 0; $i < strlen($order); $i++) {
            $orderMap[$order[$i]] = $i;
        }

        for($i = 0; $i < count($words) - 1; $i++) {
            $word1 = $words[$i];
            $word2 = $words[$i + 1];

            $minLength = min(strlen($word1), strlen($word2));

            for($j = 0; $j < $minLength; $j++) {
                if($word1[$j] != $word2[$j]) {
                    if($orderMap[$word1[$j]] > $orderMap[$word2[$j]]) {
                        return false;
                    }
                    break;
                }
            }

            if(strlen($word1) > strlen($word2) && substr($word1, 0, $minLength) == substr($word2, 0, $minLength)) {
                return false;
            }
        }

        return true;
    }
}
