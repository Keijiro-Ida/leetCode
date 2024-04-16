<?php

class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
        $count = [];

        for($i= 0; $i < strlen($moves); $i++) {
            if(isset($count[$moves[$i]])){
                $count[$moves[$i]]++;
            } else {
                $count[$moves[$i]] = 1;
            }
        }

        $strs = ['R', 'L', 'U', 'D'];

        foreach($strs as $str) {
            if(!isset($count[$str])) {
                $count[$str] = 0;
            }
        }

        return $count['R'] == $count['L'] && $count['U'] == $count['D'];

    }
}
