<?php

class Solution {

    /**
     * @param String $path
     * @return Boolean
     */
    function isPathCrossing($path) {
        $x = $y = 0;
        $visited = [];
        $visited["0,0"] = true;

        for($i = 0; $i < strlen($path); $i++) {
            $direction = $path[$i];

            if ($direction === 'N') {
                $y += 1;
            } elseif ($direction === 'S') {
                $y -= 1;
            } elseif ($direction === 'E') {
                $x += 1;
            } elseif ($direction === 'W') {
                $x -= 1;
            }

            $current = $x . ',' . $y;

            if(isset($visited[$current])) {
                return true;
            }
            $visited[$current] = true;
        }

        return false;

    }
}
