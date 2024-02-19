<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {

        for($i = 0; $i <= $num; $i++) {
            if($i * $i == $num) return true;
            else if($i * $i > $num) return false;
        }
    }
}
