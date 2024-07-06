<?php

class Solution {

    /**
     * @param Integer $area
     * @return Integer[]
     */
    function constructRectangle($area) {

        for($w = (int)sqrt($area); $w > 0; $w--) {
            if($area % $w == 0) {
                $l = (int)($area / $w);
                return [$l, $w];
            }
        }

        return [$area, 1];
    }
}
