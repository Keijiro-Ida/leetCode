<?php

class Solution {

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {

    $arr = str_split($s);
    $cnt = 0;

     $chars = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    foreach($arr as $key => $asItem) {
        $sign = 1;
        if(isset($arr[$key+1])) {
            $nextVal = $chars[$arr[$key+1]];
            if($nextVal > $chars[$arr[$key]]) {
                $sign = -1;
            }
        }
        $cnt += $sign * $chars[$asItem];
    }

    return $cnt;
}
}
