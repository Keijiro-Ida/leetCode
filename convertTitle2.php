<?php

class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $result = '';
        while($columnNumber > 0) {
            $columnNumber--;
            $result = chr($columnNumber % 26 +ord('A')) . $result;
            $columnNumber = intval($columnNumber / 26);
       }
       return $result;
    }
}
