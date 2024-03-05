<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {

        for($i = 0; $i < count($nums); $i++) {
            $map[$nums[$i]] = $i;
        }

        $result = [];

        for($i = 1; $i <= count($nums); $i++) {
            if(!isset($map[$i])) {
                $result[] = $i;
            }
        }

        return $result;
    }
}
