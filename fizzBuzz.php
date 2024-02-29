<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        for($i = 1; $i <= $n; $i++) {
            $s = "";
            if($i % 3 ==0) $s .= "Fizz";
            if($i % 5 ==0) $s .= "Buzz";
            if($i % 3 !=0 && $i % 5 !=0) $s .= $i;
            $result[] = $s;
        }
        return $result;
    }
}
