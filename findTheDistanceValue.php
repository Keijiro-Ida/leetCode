<?php

class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @param Integer $d
     * @return Integer
     */
    function findTheDistanceValue($arr1, $arr2, $d) {
        $count = 0;

        foreach($arr1 as $num1) {
            $isValid = true;
            foreach($arr2 as $num2) {
                if(abs($num1 - $num2) <= $d) {
                    $isValid = false;
                    break;
                }
            }

            if($isValid) {
                $count++;
            }
        }

        return $count;
    }
}
