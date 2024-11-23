<?php

class Solution {

    /**
     * @param Integer[][] $moves
     * @return String
     */
    function tictactoe($moves) {
        $rowScores = array_fill(0, 3, 0);
        $colScores = array_fill(0, 3, 0);

        $diag1 = 0;
        $diag2 = 0;

        $currentPlayer = 1;

        foreach($moves as $move) {
            $row = $move[0];
            $col = $move[1];

            $rowScores[$row] += $currentPlayer;
            $colScores[$col] += $currentPlayer;

            if($row == $col) {
                $diag1 += $currentPlayer;
            }

            if($row + $col == 2) {
                $diag2 += $currentPlayer;
            }

            if(abs($rowScores[$row]) == 3 || abs($colScores[$col]) == 3 || abs($diag1) == 3 || abs($diag2) == 3) {
                return $currentPlayer == 1 ? 'A': 'B';
            }

            $currentPlayer *= -1;

        }

        return count($moves) == 9 ? "Draw": "Pending";
    }
}
