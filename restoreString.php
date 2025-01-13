<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $result = array_fill(0, count($indices), '');

        for($i = 0; $i < count($indices); $i++) {
            $result[$indices[$i]] = $s[$i];
        }

        return implode('', $result);
    }
}
