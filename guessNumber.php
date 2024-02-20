<?php

/**
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

 class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {

        $start = 1;
        $end = $n;
        while($end >= $start) {
            $middle = (int)(($start + $end)/2);
            $result = $this->guess($middle);

            if($result == -1) $end = $middle -1;
            else if($result == 1) $start = $middle + 1;
            else if($result == 0) return $middle;
        }
    }
}
