<?php

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $result = 0;

        foreach(str_split($columnTitle) as $char) {
            $result = $result * 26 + (ord($char) - ord('A') + 1);
        }

        return $result;

    }
}
