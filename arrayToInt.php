<?php
class Solution {

    /**
     * @param Integer[]
     * @return Integer
     */
    function lengthOfLastWord($numbers) {

        $result = 0;
        foreach($numbers as $number) {
            $result = $result * 10 + $number;
        }
        return $result;
    }
}
