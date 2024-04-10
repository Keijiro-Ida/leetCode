<?php

class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {

        $count = 0;
        $size = count($flowerbed);

        for($i = 0; $i < $size; $i++) {
            if($flowerbed[$i] == 0 && ($i == 0 || $flowerbed[$i-1] == 0)
                    && ($i == $size-1 || $flowerbed[$i+1] == 0)) {

                $count++;
                $flowerbed[$i] = 1;
            }
        }


         return $count >= $n;
    }
}
