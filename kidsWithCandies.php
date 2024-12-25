<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);

        $result = [];

        foreach($candies as $candie) {
            $result[] = $candie + $extraCandies >= $max;
        }

        return $result;
    }
}
