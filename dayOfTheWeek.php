<?php

class Solution {

    /**
     * @param Integer $day
     * @param Integer $month
     * @param Integer $year
     * @return String
     */
    function dayOfTheWeek($day, $month, $year) {
        $date = DateTime::createFromFormat('Y-m-d', "$year-$month-$day");

        return $date->format('l');
    }
}
