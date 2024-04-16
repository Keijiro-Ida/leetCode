<?php

class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
        $vertical = 0;
        $horizontal = 0;

        for($i = 0; $i < strlen($moves); $i++) {
            switch($moves[$i]) {
                case 'R':
                    $vertical++;
                    break;
                case 'L':
                    $vertical--;
                    break;
                case 'U':
                    $horizontal++;
                    break;
                case 'D':
                    $horizontal--;
                    break;
            }
        }

        return $vertical == 0 &&  $horizontal == 0;
    }
}
