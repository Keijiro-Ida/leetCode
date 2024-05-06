<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {

        $minPrice = PHP_INT_MAX;
        $maxProfit = 0;

        foreach($prices as $price) {

            if($minPrice > $price) {
                $minPrice = $price;
            }
            $profit = $price - $minPrice;

            if($maxProfit < $profit) {
                $maxProfit = $profit;
            }
        }

        return $maxProfit;
    }
}
