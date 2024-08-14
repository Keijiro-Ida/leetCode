<?php
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function calPoints($operations) {

        $result = [];

        for($i = 0; $i < count($operations); $i++) {

            switch($operations[$i]){
                case 'C':
                    array_pop($result);
                    break;
                case 'D':
                    $result[] = end($result) * 2;
                    break;
                case '+':
                    $length = count($result);
                    $result[] = $result[$length - 1] + $result[$length - 2];

                    break;
                default:
                    if(is_numeric($operations[$i])) {
                        $result[] = (int)$operations[$i];
                    }
            }
        }

        return array_sum($result);
    }
}
