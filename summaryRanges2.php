<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {

        $ranges = [];
        $n = count($nums);

        for($i = 0; $i < $n; $i++) {
            $start = $nums[$i];
            while($i + 1 < $n && $nums[$i+1] == $nums[$i] + 1) {
                $i++;
            }
            $end = $nums[$i];

            if($start == $end) {
                $ranges[] = "$start";
            } else {
                $ranges[] = "$start->$end";
            }

        }
        return $ranges;
    }
}
