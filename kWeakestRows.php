<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @param Integer $k
     * @return Integer[]
     */
    function kWeakestRows($mat, $k) {
        $soldierCounts = array_map('array_sum', $mat);

        $indexCounts = [];
        foreach($soldierCounts as $index => $count) {
            $indexCounts[] = [$count, $index];
        }

        usort($indexCounts, function($a, $b) {
            if($a[0] === $b[0]) {
                return $a[1] - $b[1];
            }

            return $a[0] - $b[0];
        });

        $result = [];
        for($i = 0; $i < $k; $i++) {
            $result[] = $indexCounts[$i][1];
        }

        return $result;
    }
}
