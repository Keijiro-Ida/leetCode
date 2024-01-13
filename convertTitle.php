<?php

class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $arr = [];

        foreach(range('A', 'Z') as $data) {
            $arr[] = $data;
        }

        $result = '';

        while($columnNumber > 0) {
            $columnNumber--;
            $result = $arr[$columnNumber % 26] . $result;
            $columnNumber = intval($columnNumber / 26);
        }
        return $result;
    }


}
