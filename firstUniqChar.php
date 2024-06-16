<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {

        $counter = [];

        foreach(str_split($s) as $index => $char) {
            if(!isset($counter[$char])) {
                $counter[$char] = $index;
            } else {
                $counter[$char] = -1;
            }
        }

        foreach($counter as $char => $index) {
            if($index != -1) return $index;
        }

        return -1;

    }
}
