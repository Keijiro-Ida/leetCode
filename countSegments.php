<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
       $parts = explode(' ', $s);
       $filtered = array_filter($parts, function($parts) {
            return !empty($parts);
       });
       return count($filtered);
    }
}
