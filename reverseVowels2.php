<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {

        $mapping = [
            'a', 'i', 'u', 'e', 'o', 'A', 'I' ,'U', 'E', 'O'
        ];

        $s_arr = str_split($s);
        $tmp = [];
        $tmp_pos = [];

        foreach($s_arr as $index => $char) {
            if(in_array($char, $mapping)) {
                $tmp[] = $char;
                $tmp_pos[] = $index;
            }
        }

        $tmp = array_reverse($tmp);

        for($i = 0; $i < count($tmp); $i++) {
            $s_arr[$tmp_pos[$i]] = $tmp[$i];
        }

        return implode("", $s_arr);
    }
}
