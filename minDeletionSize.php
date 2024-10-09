<?php

class Solution {

    /**
     * @param String[] $strs
     * @return Integer
     */
    function minDeletionSize($strs) {
        $answer = 0;
        $columns = strlen($strs[0]);
        $rows = count($strs);

        for($i = 0; $i < $columns; $i++) {
            for($j = 1; $j < $rows; $j++) {
                if($strs[$j][$i] < $strs[$j-1][$i]) {
                    $answer++;
                    break;
                }
            }
        }

        return $answer;

    }
}
