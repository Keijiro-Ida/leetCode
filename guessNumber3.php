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

       $low = 1;
       $high = $n;

       while($low <= $high) {
            $mid = (int)(($low + $high) / 2);
            if($this->guess($mid) == 1) {
                $low = $mid + 1;
            } else if($this->guess($mid) == -1) {
                $high = $mid - 1;
            } else {
                return $mid;
            }
       }
    }
}
