<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {

        $ans = [];
        foreach($nums1 as $num1) {

            $targetPos = array_search($num1, $nums2);
            $result = -1;

            for($j = $targetPos+1; $j <= count($nums2); $j++) {
                if($nums2[$j] > $num1) {
                    $result = $nums2[$j];
                    break;
                }
            }
            array_push($ans, $result);
        }
        return $ans;
    }
}
