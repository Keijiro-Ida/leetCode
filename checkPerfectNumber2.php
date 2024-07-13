<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {

        if($num < 2) return false;

        $sum = 1;
        $sqrt = sqrt($num);

        for($i = 2; $i <= $sqrt; $i++) {
            if($num % $i == 0){
                $sum += $i;
                if($i != $num / $i) {
                    $sum += $num / $i;
                }
            }
        }

        return $sum == $num;
    }
}
