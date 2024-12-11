<?php

class Solution {

    /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2) {
        $dateTime1 = new DateTime($date1);
        $dateTime2 = new DateTime($date2);

        return $dateTime1->diff($dateTime2)->days;
    }
}
