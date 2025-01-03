<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer[]
     */
    function finalPrices($prices) {
        $n = count($prices);
        $answer = [];

        for($i = 0; $i < $n; $i++) {
            $discount = 0;

            for($j = $i + 1; $j < $n; $j++) {
                if($prices[$j] <= $prices[$i]) {
                    $discount = $prices[$j];
                    break;
                }
            }

            $answer[] = $prices[$i] - $prices[$j];
        }

        return $answer;
    }
}
