<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function arrayRankTransform($arr) {

        $sortedArr = $arr;
        sort($sortedArr);

        $rankMap = [];
        $rank = 1;
        foreach($sortedArr as $index => $value) {
            if(!isset($rankMap[$value])) {
              $rankMap[$value] = $rank;
              $rank++;
            }
        }
        return array_map(function($value) use ($rankMap) {
            return $rankMap[$value];
        }, $arr);
    }
}
