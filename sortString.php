<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function sortString($s) {
        $count = array_count_values(str_split($s));
        ksort($count);
        $result = "";

        while(!empty($count)) {
            foreach(array_keys($count) as $char) {
                $result .= $char;
                $count[$char]--;
                if($count[$char] == 0) {
                    unset($count[$char]);
                }
            }

            foreach(array_reverse(array_keys($count)) as $char) {
                $result .= $char;
                $count[$char]--;
                if($count[$char] == 0) {
                    unset($count[$char]);
                }
            }
        }

        return $result;
    }
}
