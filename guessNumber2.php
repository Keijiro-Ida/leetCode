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

        $tmp = $n / 2;
        while(true) {
            $result = $this->guess($tmp);

            if($result == -1) {
                $n = (int)$tmp;
                $tmp /= 2;
            }
            else if($result == 1)  {
                $tmp = ($tmp + $n) / 2;
            }
            else if($result == 0)  {
                return (int)$tmp;
            }
        }
    }
}
