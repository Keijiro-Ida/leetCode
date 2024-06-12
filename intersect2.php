<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {

        $count = array_count_values($nums1);
        $result = [];

        foreach($nums2 as $num) {
            if(isset($count[$num]) && $count[$num] > 0) {
                $count[$num]--;
                $result[] = $num;
            }
        }

        return $result;
    }
}
