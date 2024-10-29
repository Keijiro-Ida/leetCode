<?php

class Solution {

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones) {
        $heap = new SplMaxHeap();
        foreach($stones as $stone) {
            $heap->insert($stone);
        }

        while($heap->count() > 1) {
            $first = $heap->extract();
            $second = $heap->extract();

            if($first != $secoond) {
                $heap->insert($first - $second);
            }
        }
        return $heap->isEmpty() ? 0 : $heap->top();
    }
}
