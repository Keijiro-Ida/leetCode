<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {

        $result = [];
        $tmp = [];
        foreach($nums1 as $num) {
            if(!isset($tmp[$num])) $tmp[$num] = 0;
            $tmp[$num] += 1;
        }

        foreach($nums2 as $num) {
            if(isset($tmp[$num]) && $tmp[$num] > 0) {
                $result[] = $num;
                $tmp[$num] -= 1;
            }
        }

        return $result;
    }
}
