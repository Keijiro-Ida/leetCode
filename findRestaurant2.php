<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $map1 = [];

        foreach($list1 as $index => $word) {
            $map1[$word] = $index;
        }

        $min = PHP_INT_MAX;
        $result = [];
        foreach($list2 as $index => $word) {
            if(isset($map1[$word])) {
                $sum = $index + $map1[$word];

                if($sum < $min) {
                    $result = [$word];
                    $min = $sum;
                } elseif($sum == $min) {
                    $result[] = $word;
                }
            }
        }

        return $result;
    }
}
