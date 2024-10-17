<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $trust
     * @return Integer
     */
    function findJudge($n, $trust) {
        $trustCountOut = array_fill(1, $n, 0);
        $trustCountIn = array_fill(1, $n, 0);

        foreach($trust as $relation) {
            $a = $relation[0];
            $b = $relation[1];

            $trustCountOn[$a]++;
            $trustCountIn[$b]++;
        }

        for($i = 1; $i <= $n; $i++) {
            if($trustCountOn[$i] == 0 && $trustCountIn[$i] == $n - 1) {
                return $i;
            }
        }

        return -1;
    }
}
