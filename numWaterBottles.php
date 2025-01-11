<?php

class Solution {

    /**
     * @param Integer $numBottles
     * @param Integer $numExchange
     * @return Integer
     */
    function numWaterBottles($numBottles, $numExchange) {
        $drink = 0;
        $exchange = 0;

        while($numBottles > 0) {
            $numBottles--;
            $drink++;
            $exchange++;

            if($exchange == $numExchange) {
                $numBottles++;
                $exchange = 0;
            }
        }

        return $drink;
    }
}
