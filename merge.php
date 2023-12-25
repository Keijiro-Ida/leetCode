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


    array_splice($nums1, $m, $m+$n);

    foreach ($nums2 as $value) {
        $nums1[] = $value;
    }

    sort($nums1);
    return $nums1;

}
}
