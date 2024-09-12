<?php

class Solution {

    /**
     * @param String $s
     * @return Integer[][]
     */
    function largeGroupPositions($s) {
        $results = [];
        $n = strlen($s);

        $count = 1;
        $start = 0;

        for($i = 1; $i < $n; $i++) {
            if($s[$i] == $s[$i - 1]) {
                $count++;
            } else {
                if($count >= 3) {
                    $results[] = [$start, $i - 1];
                }
                $count = 1;
                $start = $i;
            }
        }

        if($count >= 3) {
            $results[] = [$start, $n -1];
        }

        return $results;
    }
}
