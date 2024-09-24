<?php

class Solution {

    /**
     * @param Integer[] $aliceSizes
     * @param Integer[] $bobSizes
     * @return Integer[]
     */
    function fairCandySwap($aliceSizes, $bobSizes) {

        $sumA = array_sum($aliceSizes);
        $sumB = array_sum($bobSizes);

        $delta = ($sumA - $sumB) / 2;

        $aliceSet = array_flip($aliceSizes);

        foreach($bobSizes as $y) {
            $x = $y + $delta;

            if(isset($aliceSet[$x])) {
                return [(int)$x, (int)$y];
            }
        }
    }
}
