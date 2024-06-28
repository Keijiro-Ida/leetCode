<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {

        $result = [];
        $map = [];
        foreach($nums as $num) {
            $map[$num] = true;
        }

        for($i = 1; $i <= count($nums); $i++) {
            if(!isset($map[$i])) $result[] = $i;
        }

        return $result;
    }
}
