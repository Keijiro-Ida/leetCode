<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {

        $counter = 0;
        $result = 0;

        for($i = 0; $i < strlen($s); $i++) {
            if($s[$i] == 'R') {
                $counter++;
            } else {
                $counter--;
            }

            if($counter == 0) {
                $result++;
            }
        }

        return $result;
    }
}
