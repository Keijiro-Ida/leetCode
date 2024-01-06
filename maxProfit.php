<?php


class Solution {

/**
 * @param Integer[] $prices
 * @return Integer
 */
    function maxProfit($prices) {

        $minPrice = $prices[0];
        $maxProfit = 0;

        for($i = 0; $i < count($prices); $i++) {
            if($prices[$i] < $minPrice) {
                $minPrice = $prices[$i];
            }
            $profit = $prices[$i] - $minPrice;

            if($maxProfit < $profit) {
                $maxProfit = $profit;
            }
        }

        return $maxProfit;

    }
}
