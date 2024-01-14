<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $cnt = count($nums);

        $arr =[];
        foreach($nums as $num) {
            $arr[$num] += 1;

            if($arr[$num] > $cnt / 2) return $num;
        }


    }
}
