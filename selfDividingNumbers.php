<?php

class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        $result = [];

        for($i = $left; $i <= $right; $i++) {
            $num = $i;
            $isSelfDividing = true;
            while($num > 0) {
                $digit = $num % 10;
                $num = intval($num / 10);
                if($digit == 0 || $i % $digit != 0) {
                    $isSelfDividing = false;
                    break;
                }
            }

            if($isSelfDividing) {
                $result[] = $i;
            }
        }

        return $result;
    }
}
