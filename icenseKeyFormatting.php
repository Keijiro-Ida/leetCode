<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {

        $s = strtoupper(str_replace("-", "", $s));

        $firstLength = strlen($s) % $k;
        $firstLength = $firstLength == 0 ? $k : $firstLength;
        $newString = "";
        $newString = substr($s, 0, $firstLength);
        for($i=$firstLength; $i<strlen($s); $i += $k) {
           $newString .= "-" . substr($s, $i, $k);
        }
        return $newString;
    }
}
