<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function minSubsequence($nums) {

        rsort($nums);
        $total = array_sum($nums);

        $result = [];
        $current_sum = 0;

        foreach($nums as $num) {
            $result[] = $num;
            $current_sum += $num;
            if($current_sum > $total - $current_sum) {
                break;
            }
        }

        return $result;
    }
}
