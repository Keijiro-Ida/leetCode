<?php

class Solution {

    /**
     * @param Integer $turnedOn
     * @return String[]
     */
    function readBinaryWatch($turnedOn) {
        $res = [];
        for ($hour = 0; $hour < 12; $hour++) {
            for($minute = 0; $minute < 60; $minute++) {
                if($this->bitCount($hour) + $this->bitCount($minute) == $turnedOn){
                    $formattedMinute = $minute < 10 ? '0'.$minute: $minute;
                    $res[] = $hour . ':' . $formattedMinute;
                }
            }
        }
        return $res;
    }

    function bitCount($value) {
        $count = 0;
        while($value) {
            $count += ($value & 1);
            $value = $value >> 1;
        }
        return $count;
    }
}
