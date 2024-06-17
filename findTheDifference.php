<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
          $countT = array_count_values(str_split($t));
        $countS = array_count_values(str_split($s));

        foreach($countT as $char => $count) {
            if(!isset($countS[$char]) || $count > $countS[$char]) {
                return $char;
            }
        }
    }
}
