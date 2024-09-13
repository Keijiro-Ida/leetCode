<?php

class Solution {

    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage($image) {
        $results = [];

        foreach($image as $row) {
            $result = [];

            foreach(array_reverse($row) as $value) {
                $result[] = $value == 1 ? 0 : 1;
            }
            $results[] = $result;
        }

        return $results;
    }
}
