<?php

class Solution {

    /**
     * @param Integer[] $bits
     * @return Boolean
     */
    function isOneBitCharacter($bits) {
        $i = 0;
        while($i < count($bits) - 1) {
            if($bits[$i] == 1) {
                $i += 2;
            } else {
                $i++;
            }
        }

        return $i == count($bits) - 1;

    }
}
