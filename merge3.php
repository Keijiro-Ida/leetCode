<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {

        $i = $m - 1;
        $j = $n - 1;
        $mergeIndex = $m + $n - 1;

        while($j >= 0) {

            if($i < 0 || $nums1[$i] < $nums2[$j]) {
                $nums1[$mergeIndex] = $nums2[$j];
                $j--;
            } else {
                 $nums1[$mergeIndex] = $nums1[$i];
                 $i--;
            }
            $mergeIndex--;
        }
    }
}
