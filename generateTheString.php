<?php

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function generateTheString($n) {
        if($n % 2 == 0) {
            return str_repeat('x', $n - 1) . 'y';
        } else {
            return str_repeat('x', $n);
        }
    }
}
