<?php

class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {

        $cities = [];

        foreach($paths as $path) {
            $cities[$path[0]] = true;
        }

        foreach($paths as $path) {
            if(!isset($cities[$path[1]])) {
                return $path[1];
            }
        }
    }
}class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {

        $cities = [];

        foreach($paths as $path) {
            $cities[$path[0]] = true;
        }

        foreach($paths as $path) {
            if(!isset($cities[$path[1]])) {
                return $path[1];
            }
        }
    }
}
