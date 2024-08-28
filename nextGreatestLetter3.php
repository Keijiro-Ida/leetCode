<?php

class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {
        foreach ($letters as $letter) {
            // ターゲットより大きい最初の文字を見つけたら返す
            if ($letter > $target) {
                return $letter;
            }
        }

        // 見つからなければ最初の文字を返す
        return $letters[0];
    }
}
