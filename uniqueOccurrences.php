<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {

        $counts = array_count_values($arr);

        $values = array_values($counts);

        $uniqueValues = array_unique($values);

        return count($values) == count($uniqueValues);
    }
}
