<?php

class Solution {

/**
 * @param Integer $n
 * @return Integer[]
 */
function countBits($n) {

   $ans = [];

   for($i = 0; $i < $n; $i++) {
        $ans[] = substr_count(decbin($i), '1');
   }

   return $ans;
}
}
