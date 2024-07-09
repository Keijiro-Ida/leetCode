<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $keyboards = [
            "qwertyuiop",
            "asdfghjkl",
            "zxcvbnm"
        ];
       $keyboardRow = [];

       foreach($keyboards as $index => $char) {
            for($i = 0; $i < strlen($char); $i++) {
                $keyboardRow[strtolower($char[$i])] = $index;
            }
       }

        $result = [];
        foreach($words as $word) {
            $isOneRow = true;
            $firstRow = $keyboardRow[strtolower($word[0])];

            for($i = 0; $i < strlen($word); $i++) {
                if($keyboardRow[strtolower($word[$i])] != $firstRow) {
                    $isOneRow = false;
                    break;
                }
            }
            if($isOneRow) {
                $result[] = $word;
            }
        }

        return $result;
    }
}
