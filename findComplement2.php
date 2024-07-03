<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {

       $bin = decbin($num);

       $len = strlen($bin);
       $allOnes = (1 << $len) - 1;

       return $num ^ $allOnes;


    }
}
