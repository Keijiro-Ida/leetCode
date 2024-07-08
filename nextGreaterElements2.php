<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {

        $result = [];

        foreach($nums1 as $num1){
            $index = array_search($num1, $nums2);
            $found = false;
            for($j = $index; $j < count($nums2); $j++) {
                if($num1 < $nums2[$j]) {
                    $result[] = $nums2[$j];
                    $found = true;
                    break;
                }
            }

            if(!$found) $result[] = -1;
        }

        return $result;
    }
}
