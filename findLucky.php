<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findLucky($arr) {
        $count = array_count_values($arr);

        $luckyNumbers = [];

        foreach($count as $key => $value) {
            if($key == $value) {
                $luckyNumbers[] = $value;
            }
        }

        return empty($luckyNumbers) ? -1: max($luckyNumbers);
    }
}
