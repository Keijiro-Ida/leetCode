<?php

class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        $expected = $heights;
        sort($expected);

        $count = 0;

        for($i = 0; $i < count($heights); $i++) {
            if($heights[$i] != $expected[$i]) {
                $count++;
            }
        }

        return $count;
    }
}
