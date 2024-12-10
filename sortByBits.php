<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function sortByBits($arr) {
        $bitCount = [];

        foreach($arr as $index => $num) {
            $bitCount[] = [
                'value' => $num,
                'bitCount' => substr_count(decbin($num), '1'),
            ];
        }

        usort($bitCount, function($a, $b) {
            if ($a['bitCount'] === $b['bitCount'] ) {
                return $a['value'] <=> $b['value'];
            }
            return $a['bitCount'] <=> $b['bitCount'];
        });

        return array_column($bitCount, 'value');
    }
}
