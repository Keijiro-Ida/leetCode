<?php

class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $cashRegister = [
            5 => 0,
            10 => 0
        ];

        foreach($bills as $bill) {
            if($bill == 5) {
                $cashRegister[5]++;
            } else if($bill == 10) {
                if($cashRegister[5] > 0) {
                    $cashRegister[5]--;
                    $cashRegister[10]++;
                } else {
                    return false;
                }
            } else if($bill == 20) {
                if($cashRegister[10] > 0 && $cashRegister[5] > 0) {
                    $cashRegister[10]--;
                    $cashRegister[5]--;
                } else if($cashRegister[5] > 2) {
                    $cashRegister[5] -= 3;
                } else {
                    return false;
                }
            }
        }

        return true;
    }
}
