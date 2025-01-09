<?php

class Solution {

    /**
     * @param String $date
     * @return String
     */
    function reformatDate($date) {
        $cleanDate = preg_replace('/(st|nd|rd|th)/', '', $date);

        $dateTime = DateTime::createFromFormat('j M Y', $cleanDate);

        return $dateTime->format('Y-m-d');
    }
}
