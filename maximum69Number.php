<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
        $numStr = strval($num);

        for($i = 0; $i < strlen($numStr); $i++) {
            if($numStr[$i] == '6') {
                $numStr[$i] = '9';
                break;
            }
        }

        return intval($numStr);
    }
}
