<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums) {

        $count = count($nums);

        $numsMap = array_count_values($nums);
        $duplicate = -1;
        $missing = -1;

        for($i = 1; $i <= $count; $i++) {
            if(!isset($numsMap[$i])) {
                $missing = $i;
            } elseif($numsMap[$i] == 2) {
                $duplicate = $i;
            }
        }
        return [$duplicate, $missing];
    }
}
