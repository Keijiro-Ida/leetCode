<?php

class Solution {

    /**
     * @param Integer[][] $coordinates
     * @return Boolean
     */
    function checkStraightLine($coordinates) {

        for($i = 2; $i < count($coordinates); $i++) {
            if(($coordinates[$i][1] - $coordinates[$i-1][1]) * ($coordinates[$i][0] - $coordinates[0][0]) !=
               ($coordinates[$i][0] - $coordinates[$i-1][0]) * ($coordinates[$i][1] - $coordinates[0][1])) {
                return false;
               }
        }
        return true;
    }
}
