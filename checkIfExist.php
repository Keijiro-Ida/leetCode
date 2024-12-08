<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        $seen = [];

        foreach($arr as $x) {
            if(isset($seen[$x * 2]) || ($x % 2 == 0 && isset($seen[$x / 2]))) {
                return true;
            }
            $seen[$x] = true;
        }

        return false;
    }
}
