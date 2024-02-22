<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $count = array_count_values(str_split($s));

        for($i = 0; $i < strlen($s); $i++) {
            if($count[$s[$i]] == 1) return $i;
        }

        return -1;
    }
}
