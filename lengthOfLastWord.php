<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {

        $arr = explode(' ', trim($s));
        return strlen(end($arr));
    }
}
