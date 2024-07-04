<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {

        $s = str_replace("-", "", strtoupper($s));

        $length = strlen($s);

        $firstLength = $length % $k;
        if($firstLength == 0) $firstLength = $k;

        $groups = [];
        $groups[] = substr($s, 0, $firstLength);

        for($i = $firstLength; $i < $length; $i += $k) {
                $groups[] = substr($s, $i, $k);
        }

        return implode('-', $groups);
    }
}
