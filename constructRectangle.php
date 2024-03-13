<?php

class Solution {

    /**
     * @param Integer $area
     * @return Integer[]
     */
    function constructRectangle($area) {
        $w = floor(sqrt($area));
        while($area % $w)  {
            $w--;
        }
        return [$area / $w, $w];
    }
}
