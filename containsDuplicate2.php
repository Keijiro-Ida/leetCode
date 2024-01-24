<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $tempArr = [];

        foreach($nums as $num) {
            if(isset($tempArr[$num])) return true;
            $tempArr[$num] = 1;
         }
         return false;
    }
}
