<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {

        // $nums = array_diff($nums,[$val]);

        // return count($nums);

        // if(in_array($val, $nums)) {
        //     foreach(array_keys($nums, $val) as $key) {
        //         unset($nums[$key]);
        //     }
        // }
        // return count($nums);

        foreach($nums as $key => $num) {
            if($num == $val) unset($nums[$key]);
        }
        return count($nums);
    }
}
