<?php

class NumArray {

    public $nums;

    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->nums = $nums;
    }

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function sumRange($left, $right) {
        $sum = 0;
        for($i = $left; $i <= $right; $i++) {
            $sum += $this->nums[$i];
        }
        return $sum;
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($left, $right);
 */
