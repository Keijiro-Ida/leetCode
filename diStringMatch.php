<?php

class Solution {

    /**
     * @param String $s
     * @return Integer[]
     */
    function diStringMatch($s) {

        $max = strlen($s);
        $min = 0;

        $result = [];

        for($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if($char == 'I') {
                $result[] = $min;
                $min++;
            } elseif($char == 'D') {
                $result[] = $max;
                $max--;
            }

        }

        $result[] = $max;

        return $result;
    }
}
