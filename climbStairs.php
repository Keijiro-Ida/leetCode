<?php
class Solution {

    private array $stepArr =[
            0 => 0,
            1 => 1,
            2 => 2,
        ];

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {

        if(isset($this->stepArr[$n])) {
            return $this->stepArr[$n];
        }

        $result = $this->climbStairs($n-2) + $this->climbStairs($n-1);
        $this->stepArr[$n] = $result;

        return $result;

    }
}
