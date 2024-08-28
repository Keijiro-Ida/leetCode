<?php

class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {

        $range = range('a', 'z');
        $targetIndex = array_search($target, $range);
        foreach($letters as $letter) {
            $index = array_search($letter, $range);
            if($targetIndex < $index) {
                return $letter;
            }
        }

        return $letters[0];
    }
}
