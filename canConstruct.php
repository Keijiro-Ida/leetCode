<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {

        $ranCount = array_count_values(str_split($ransomNote));
        $magCount = array_count_values(str_split($magazine));

        foreach($ranCount as $char => $count) {
            if($magCount[$char] < $count) {
                return false;
            }
        }
        return true;
    }
}
