<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $answer = [];

        for($i = 0; $i <$numRows; $i++) {
            $tmp = [];
            if(isset($answer[$i-1])) $tmp = $answer[$i-1];
            $inArr = [];
            for($j = 0; $j <= $i; $j++) {
                if(!isset($tmp[$j-1]) && !isset($tmp[$j])) $inArr[] = 1;
                if(!isset($tmp[$j-1]) && isset($tmp[$j])) $inArr[] = $tmp[$j];
                if(isset($tmp[$j-1]) && !isset($tmp[$j])) $inArr[] = $tmp[$j-1];
                if(isset($tmp[$j-1]) && isset($tmp[$j])) $inArr[] = $tmp[$j] + $tmp[$j-1];
            }
            $answer[] = $inArr;

        }
        return $answer;
    }
}
