<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {

    $num = [];

    for($i = 0; $i < count($nums); $i++) {
        for($j = $i+ 1; $j < count($nums); $j++) {
            if($nums[$i] + $nums[$j] == $target){
                    $num[0] = $i;
                    $num[1] = $j;
                break;
            }
        }
    }
    return $num;
}
}

?>
