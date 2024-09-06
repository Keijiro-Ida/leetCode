<?php

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        $morseCodes = [
            ".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---",
            "-.-", ".-..", "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-",
            "..-", "...-", ".--", "-..-", "-.--", "--.."
        ];

        // アルファベットの範囲（aからz）を取得
        $alphabets = range('a', 'z');

        // アルファベットとモールス信号を結びつける連想配列を作成
        $morseCodeMap = array_combine($alphabets, $morseCodes);

        $transformations = [];

        foreach($words as $word) {
            $morseWord = "";

            for($i = 0; $i < strlen($word); $i++) {
                $morseWord .= $morseCodeMap[$word[$i]];
            }

            $transformations[$morseWord] = true;
        }

        return count($transformations);

    }
}
