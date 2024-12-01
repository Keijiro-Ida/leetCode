<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function decompressRLElist($nums) {
        $result = [];

        for($i = 0; $i < count($nums); $i += 2) {
            $freq = $nums[$i];
            $val = $nums[$i + 1];

            $result = array_merge($result, array_fill(0, $freq, $val));
        }

        return $result;
    }
}
