<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $n = strlen($s);


        for($len = 1; $len <= $n / 2; $len++) {
            if($n % $len == 0) {
                $sub = substr($s, 0, $len);
                $newString = "";
                for($i = 0; $i < $n / $len; $i++) {
                    $newString .= $sub;
                }
                if($newString == $s) {
                    return true;
                }
            }
        }

        return false;
    }
}
