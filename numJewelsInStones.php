<?php

class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $jewelsArray = str_split($jewels);
        $count = 0;
        for($i = 0; $i < strlen($stones); $i++) {
            if(in_array($stones[$i], $jewelsArray)) {
                $count++;
            }
        }
        return $count;
    }
}
