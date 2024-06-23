<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $answer  = [];

        for($i = 1; $i <= $n; $i++) {
            if($i % 3 == 0 && $i % 5 == 0) {
                $answer[] = "FizzBuzz";
            } elseif($i % 3 == 0) {
                $answer[] = "Fizz";
            } elseif($i % 5 == 0) {
                $answer[] = "Buzz";
            } else {
                $answer[] = "$i";
            }
        }

        return $answer;
    }
}
