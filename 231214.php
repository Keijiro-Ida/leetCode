<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {

        $arr = str_split($s);
        $cnt = 0;
        for($i = 0; $i < count($arr); $i++ ){
            if($arr[$i] == 'I' && isset($arr[$i+1]) && $arr[$i+1] == 'V')  {
                $cnt += 4;
                $i++;
                continue;
            }
            if($arr[$i] == 'I' && isset($arr[$i+1]) &&$arr[$i+1] == 'X')  {
                $cnt += 9;
                $i++;
                continue;
            }
             if($arr[$i] == 'X' && isset($arr[$i+1]) && $arr[$i+1] == 'L')  {
                $cnt += 40;
                $i++;
                continue;
            }
            if($arr[$i] == 'X' && isset($arr[$i+1]) &&$arr[$i+1] == 'C')  {
                $cnt += 90;
                $i++;
                continue;
            }
             if($arr[$i] == 'C' && isset($arr[$i+1]) && $arr[$i+1] == 'D')  {
                $cnt += 400;
                $i++;
                continue;
            }
            if($arr[$i] == 'C' && isset($arr[$i+1]) &&$arr[$i+1] == 'M')  {
                $cnt += 900;
                $i++;
                continue;
            }
            if($arr[$i] == 'I') $cnt += 1;
            if($arr[$i] == 'V') $cnt += 5;
            if($arr[$i] == 'X') $cnt += 10;
            if($arr[$i] == 'L') $cnt += 50;
            if($arr[$i] == 'C') $cnt += 100;
            if($arr[$i] == 'D') $cnt += 500;
            if($arr[$i] == 'M')$cnt += 1000;

        }

        return $cnt;
    }
}
