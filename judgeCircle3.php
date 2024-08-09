<?php


class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
        $count = array_count_values(str_split($moves));

        return (($count["R"] ?? 0) == ($count["L"] ?? 0)) &&
            (($count["U"] ?? 0) == ($count["D"] ?? 0));
    }
}
