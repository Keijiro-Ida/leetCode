<?php

class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function buddyStrings($s, $goal) {

        if(strlen($s) != strlen($goal)) return false;
        if ($s === $goal) {
            $charCount = array_count_values(str_split($s));
            foreach($charCount as $count) {
                if($count > 1) return true;
            }
            return false;
        }


        $position = [];
        for($i = 0; $i < strlen($s); $i++) {
            if($s[$i] != $goal[$i]) {
                $position[] = $i;
            }
        }

        return count($position) == 2
            && $s[$position[0]] == $goal[$position[1]]
            && $s[$position[1]] == $goal[$position[0]];

    }
}
