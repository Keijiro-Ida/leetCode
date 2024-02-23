<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $tCount = array_count_values(str_split($t));
        $sCount = array_count_values(str_split($s));

        foreach($tCount as $index => $cnt) {

            if(!isset($sCount[$index]) || $cnt > $sCount[$index]) return $index;

        }
    }
}
