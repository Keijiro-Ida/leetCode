<?php

class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2) {

        $orderMap = array_flip($arr2);

        $sorted = [];
        $remaining = [];

        foreach($arr1 as $value) {
            if(isset($orderMap[$value])) {
                $sorted[$value][] = $value;
            } else {
                $remaining[] = $value;
            }
        }

        $result = [];

        foreach($arr2 as $value) {
            if(isset($sorted[$value])) {
                $result = array_merge($result, $sorted[$value]);
            }
        }

        sort($remaining);
        $result = array_merge($result, $remaining);

        return $result;
    }
}
