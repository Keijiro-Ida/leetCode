<?php

class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {

       $length = count($flowerbed);
       $count = 0;

       for($i = 0; $i < $length; $i++) {
            if(($flowerbed[$i-1] == 0 || $i == 0) &&
                $flowerbed[$i] == 0 &&
                ($flowerbed[$i+1] == 0 || $i == $length-1)) {
                    $count++;
                    $i++;
            }

            if($count >= $n) return true;
       }

       return false;

    }
}
