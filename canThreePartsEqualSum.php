<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canThreePartsEqualSum($arr) {

        $total = array_sum($arr);

        if($total % 3 != 0) {
            return false;
        }

        $target = $total / 3;
        $current = 0;
        $count = 0;

        for($i = 0; $i < count($arr); $i++) {
            $current += $arr[$i];

            if($current == $target) {
                $count++;
                $current = 0;
            }
            if ($count == 3) {
                return true;
            }
        }

        return false;
    }
}
