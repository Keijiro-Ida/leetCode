<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $n = strlen($s);

        for($i = 1; $i <= $n / 2; $i++) {
            if($n % $i == 0) {
                $substring = substr($s, 0, $i);
                if(str_repeat($substring, $n / $i) == $s) {
                    return true;
                }
            }
        }

        return false;
    }
}
