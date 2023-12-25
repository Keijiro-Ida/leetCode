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


       $p1 = $m-1;
       $p2 = $n-1;
       $k = count($nums1)-1;

       while($p2 >= 0) {
           if($nums1[$p1] > $nums2[$p2]) {
               $nums1[$k] = $nums1[$p1];
               $p1--;
           } else {
               $nums1[$k] = $nums2[$p2];
               $p2--;
           }
           $k--;
       }

    }
}
