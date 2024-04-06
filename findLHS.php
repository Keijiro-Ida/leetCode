<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLHS($nums) {
        $count = array_count_values($nums);

        $max = 0;
        foreach($count as $key => $num) {
            if(isset($count[$key+1]) && $max < $count[$key] + $count[$key+1]) {
                $max = $count[$key] + $count[$key+1];
            }
        }
        return $max;
    }
}
