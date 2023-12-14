<?php

    class Solution {

    /**
    * @param Integer[] $arr
    * @return Integer
    */
    function findSpecialInteger($arr) {
        $result = null;
        $count = 0;
        for($i = 0; $i < count($arr); $i++) {
            if($i != 0 && $arr[$i] == $arr[$i-1]) {
                $count++;

                if($count > count($arr)/4-1) {
                    $result = $arr[$i];
                    break;
                }
            } else {
                $count = 0;
            }
            if(count($arr) < 4) {
                $result = $arr[$i];
                break;
            }


            }
            return $result;
        }
    }
?>
