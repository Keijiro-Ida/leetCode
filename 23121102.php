<?php

    class Solution {

        /**
         * @param Integer[] $arr
         * @return Integer
         */
        function findSpecialInteger($arr) {
            $cnt = array_count_values($arr);
            arsort($cnt);
            $keys = array_keys($cnt);
            return $keys[0];
        }
    }

    ?>
