<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {

        $evenNums = [];
        $oddNums = [];

        foreach($nums as $num) {
            if($num % 2 == 0) {
                $evenNums[] = $num;
            } else {
                $oddNums[] = $num;
            }
        }

        return array_merge($evenNums, $oddNums);
    }
}
