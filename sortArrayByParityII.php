<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParityII($nums) {

        $evenNums = [];
        $oddNums = [];
        $result = [];
        $evenIndex = 0;
        $oddIndex = 0;

        foreach($nums as $num) {
            if($num % 2 == 0) {
                $evenNums[] = $num;
            } else {
                $oddNums[] = $num;
            }
        }

        foreach($nums as $index => $num) {
            if($index % 2 == 0) {
                $result[] = $evenNums[$evenIndex];
                $evenIndex++;
            } else {
                $result[] = $oddNums[$oddIndex];
                $oddIndex++;
            }
        }

        return $result;
    }
}
