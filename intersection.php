<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {

        $set1 = array_unique($nums1);
        $set2 = array_unique($nums2);
        $intersection = array_intersect($set1, $set2);

        return array_values($intersection);
    }
}
