<?php

class Solution {

    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType) {

        $n = count($candyType) / 2;

        $unique = count(array_unique($candyType));

        return $n >= $unique ? $unique : $n;
    }
}
