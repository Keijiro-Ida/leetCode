<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        $map = [];

        foreach($nums as $index => $key) {

            $complement = $target - $key;

            if(isset($map[$complement])) {
                return [$map[$complement], $index];
            }

            $map[$key] = $index;
        }
        return [];
    }
}
