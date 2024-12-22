<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minStartValue($nums) {
        $stepSum = 0;
        $minStepSum = 0;

        foreach($nums as $num) {
            $stepSum += $num;

            if($stepSum < $minStepSum) {
                $minStepSum = $stepSum;
            }
        }

        return $minStepSum < 0 ? 1 - $minStepSum : 1;
    }
}
