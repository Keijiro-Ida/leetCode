<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @return Integer[]
     */
    function findSmallestSetOfVertices($n, $edges) {
        $isDegree = array_fill(0, $n, 0);

        foreach($edges as $edge) {
            $isDegree[$edge[1]]++;
        }

        $result = [];

        for($i = 0; $i < $n; $i++) {
            if($isDegree[$i] == 0) {
                $result[] = $i;
            }
        }

        return $result;
    }
}
