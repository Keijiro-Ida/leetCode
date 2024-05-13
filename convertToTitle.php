<?php

class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $result = "";
        while($columnNumber > 0) {
            $columnNumber--;
            $reminder = $columnNumber % 26;
            $result = chr($reminder + ord('A')) . $result;
            $columnNumber = intval($columnNumber / 26);
        }

        return $result;
    }
}
