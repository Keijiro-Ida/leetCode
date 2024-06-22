<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {

        $char_count = array_count_values(str_split($s));

        $length = 0;

        foreach($char_count as $char => $count) {

            $length += (int)($count / 2) * 2;

            if($count % 2 == 1) $add_found = true;
        }

        if($add_found) $length++;

        return $length;
    }
}
