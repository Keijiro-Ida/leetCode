<?php

class Solution {

    /**
     * @param Integer[] $score
     * @return String[]
     */
    function findRelativeRanks($score) {
        $sortedScore = $score;

        rsort($sortedScore);
        $rankMap = [];
        $result = [];

        foreach($sortedScore as $index => $value) {
            if($index == 0) {
                $rankMap[$value] = "Gold Medal";
            } else if($index == 1) {
                $rankMap[$value] = "Silver Medal";
            } else if($index == 2) {
                $rankMap[$value] = "Bronze Medal";
            } else {
                $rankMap[$value] = (string)($index + 1);
            }
        }

        foreach($score as $point) {
            $result[] = $rankMap[$point];
        }

        return $result;
    }
}
