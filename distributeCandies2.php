<?php

class Solution {

    /**
     * @param Integer $candies
     * @param Integer $num_people
     * @return Integer[]
     */
    function distributeCandies($candies, $num_people) {
        $ans = array_fill(0, $num_people, 0);
        $i = 0;

        while($candies > 0) {
            $give = $i + 1;

            if($candies < $give) {
                $give = $candies;
            }

            $ans[$i % $num_people] += $give;
            $candies -= $give;

            $i++;
        }

        return $ans;
    }
}
