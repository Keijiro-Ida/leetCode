<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countLargestGroup($n) {
        $groups = [];
        for($i = 1; $i <= $n; $i++){
            $digitSum = array_sum(str_split($i));
            $groups[$digitSum][] = $i;
        }

        $sizes = array_map('count', $groups);

        $maxSize = max($sizes);

        return count(array_filter($sizes, fn($size) => $size === $maxSize));
    }
}
