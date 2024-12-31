<?php

class Solution {

    /**
     * @param Integer[] $target
     * @param Integer[] $arr
     * @return Boolean
     */
    function canBeEqual($target, $arr) {
        $targetCount = array_count_values($target);
        $arrCount = array_count_values($arr);

        return $targetCount == $arrCount;
    }
}
