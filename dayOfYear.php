<?php

class Solution {

    /**
     * @param String $date
     * @return Integer
     */
    function dayOfYear($date) {

        $dateParts = explode('-', $date);

        $startOfYear = $dateParts[0] . '-01-01';

        $currentDate = new DateTime($date);
        $startDate = new DateTime($startOfYear);

        $dayDifference = $currentDate->diff($startDate)->days + 1;

        return $dayDifference;
    }
}
