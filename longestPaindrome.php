<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {

        for ($i = 0; $i < strlen($s); $i++) {
            $map[$s[$i]]++;
        }

        $result = 0;
        foreach($map as $char => $count) {
            $result += $count - $count % 2;
        }

        if($result < strlen($s)) {
            $result++;
        }

        return $result;
    }
}
