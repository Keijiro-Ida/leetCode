<?php

class Solution {

    /**
     * @param String[][] $board
     * @return Integer
     */
    function numRookCaptures($board) {

        $rookRow = -1;
        $rookCol = -1;

        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                if ($board[$i][$j] == 'R') {
                    $rookRow = $i;
                    $rookCol = $j;
                    break;
                }
            }
        }

        $count = 0;
        $directions = [[-1, 0], [1, 0], [0, -1], [0, 1]];

        foreach($directions as $direction) {
            $dx = $direction[0];
            $dy = $direction[1];
            $x = $rookRow;
            $y = $rookCol;

            while(true) {
                $x += $dx;
                $y += $dy;

                if ($x < 0 || $x >= 8 || $y < 0 || $y >= 8) {
                    break;
                }

                if($board[$x][$y] == 'B') {
                    break;
                }

                if($board[$x][$y] == 'p') {
                    $count++;
                    break;
                }

            }

        }

        return $count;

    }
}
