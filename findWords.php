<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $keybords = [
            "qwertyuiop",
            "asdfghjkl",
            "zxcvbnm"
        ];
        $keyAt = [];
        foreach($keybords as $index => $keys) {
            $chars = str_split($keys);
            foreach($chars as $char) {
                $keyAt[$char] = $index + 1;
            }
        }
        $result = [];
        foreach($words as $word) {
            $chars = str_split($word);
            $firstRow = $keyAt[strtolower($chars[0])] ?? null;
            $isOneRow = true;
            foreach($chars as $char) {
               if(($keyAt[strtolower($char)] ?? null) != $firstRow) {
                $isOneRow = false;
                break;
               }
            }
            if($isOneRow) $result[] = $word;
        }
        return $result;
    }
}
