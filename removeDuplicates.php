<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        // $nums = array_unique($nums);

        // return count($nums);

        $uniqueArr = [];

        for($i=0; $i<count($nums); $i++) {
            if(!in_array($nums[$i], $uniqueArr)){
                $uniqueArr[] = $nums[$i];
            }
        }

        $nums = $uniqueArr;
        return count($nums);

    }
}
