<?php

class Solution {

    /**
     * @param Integer[] $score
     * @return String[]
     */
    function findRelativeRanks($score) {
        $tmp = $score;

        rsort($tmp);
        $map = [];
        foreach($tmp as $index => $point) {
            $map[$point] = $index + 1;
        }
        $result = [];
        foreach($score as $point) {
            switch ($map[$point]){
                case 1:
                    $result[] = "Gold Medal";
                    break;
                case 2:
                    $result[] = "Silver Medal";
                    break;
                case 3:
                    $result[] = "Bronze Medal";
                    break;
                default:
                    $result[] = (string)$map[$point];
                    break;
            }
        }

        return $result;
    }
}
