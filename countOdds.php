<?php

class Solution {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds($low, $high) {

         // 範囲の長さ
        $rangeLength = $high - $low + 1;

        // 範囲が奇数個の場合
        if ($rangeLength % 2 == 0) {
            return $rangeLength / 2; // 偶数個ならちょうど半分が奇数
        } else {
            // 奇数個の場合は、low または high が奇数なら +1
            return floor($rangeLength / 2) + ($low % 2 == 1 || $high % 2 == 1 ? 1 : 0);
        }
    }
}
