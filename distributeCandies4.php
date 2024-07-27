<?php

class Solution {

    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType) {

        $uniqueCount = count(array_unique($candyType));
        $count = (int)(count($candyType) / 2);
        return min($uniqueCount, $count);
    }
}
