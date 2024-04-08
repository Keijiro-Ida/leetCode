<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $listMap2 = [];
        foreach($list2 as $index => $value) {
            $listMap2[$value] = $index;
        }
        $min = PHP_INT_MAX;
        $result = [];
        foreach($list1 as $index => $value) {
            if(isset($listMap2[$value])) {
                $indexSum = $index + $listMap2[$value];
                if($min > $indexSum) {
                    $min = $indexSum;
                    $result = [$value];
                } else if($min == $indexSum) {
                    $result[] = $value;
                }
            }
        }

        return $result;
    }
}
