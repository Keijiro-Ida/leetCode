<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {

        if($num <= 1) return false;

        $result = 1;

        for($i = 2; $i * $i <= $num; $i++) {
            if($num % $i == 0)  {
                $result += $i;
                if($i != $num / $i) $result += $num / $i;
            }
        }
        return $result == $num;
    }
}
