<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {

        if(count($nums) == 1) {
            return current($nums);
       }
       $result = [];
       foreach($nums as $num) {
            if(isset($result[$num])) {
                unset($result[$num]);
            } else {
                $result[$num] = $num;
            }
       }
       return current($result);
    }
}
