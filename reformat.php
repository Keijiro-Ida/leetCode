<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reformat($s) {
        $letters = preg_replace('/[^a-z]/', '', $s);
        $digits = preg_replace('/[^0-9]/', '', $s);

        if(abs(strlen($letters) - strlen($digits)) > 1) {
            return "";
        }

        $result = "";
        $i = 0; $j = 0;

        $useLettersFirst = strlen($letters) >= strlen($digits);

        while($i < strlen($letters) || $j < strlen($digits)) {
            if($useLettersFirst && $i < strlen($letters)) {
                $result .= $letters[$i++];
                $useLettersFirst = false;
            } else {
                $result .= $digits[$j++];
                $useLettersFirst = true;
            }
        }

        return $result;
    }
}
