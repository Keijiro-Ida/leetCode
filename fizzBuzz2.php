<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        for($i = 1; $i <= $n; $i++) {
            switch($i) {
                case $i%3==0 && $i%5==0:
                    $result[] = "FizzBuzz";
                    break;
                case $i%3==0:
                    $result[] = "Fizz";
                    break;
                case $i%5==0:
                    $result[] = "Buzz";
                    break;
                default:
                    $result[] = (string)$i;
                    break;
            }
        }
        return $result;
    }
}
