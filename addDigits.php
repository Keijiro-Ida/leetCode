<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {

        if($num == 0) {
            return 0;
        }

        while($num >= 10) {
            $sum = 0;
            while($num != 0) {
                $sum =  $sum + $num % 10;
                $num = (int)$num/ 10;
            }
            $num = $sum;
        }

        return $num;
    }
}
