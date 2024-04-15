<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums) {

        $n = count($nums);
        $map = [];
        $result = [];
        foreach($nums as $num) {
            if(isset($map[$num])) {
                $result[] = $num;
            } else {
                $map[$num] = 1;
            }
        }

        for($i = 1; $i <= $n; $i++) {
            if(!isset($map[$i])) {
                $result[] = $i;
                break;
            }
        }
        return $result;
    }
}
