<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {

        $count = 0;
        $candidate = null;

        foreach($nums as $num) {
            if($count == 0) {
                $candidate = $num;
            }
            if($num == $candidate) {
                $count++;
            } else {
                $count--;
            }
        }
        return $candidate;
    }
}
