<?php

class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);

        $count = 0;
        $i = 0;
        $j = 0;

        while($i < count($g) && $j < count($s)) {
            if($g[$i] <= $s[$j]) {
                $j++;
                $i++;
                $count++;

            } else {
                $j++;
            }
        }

        return $count;
    }
}
