<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer[] $rounds
     * @return Integer[]
     */
    function mostVisited($n, $rounds) {
       if($rounds[0] <= $rounds[count($rounds) - 1]) {
            return range($rounds[0], $rounds[count($rounds) - 1]);
       } else {
            return array_merge(range(1, $rounds[count($rounds) - 1], range($rounds[0], $n)));
       }
    }
}
