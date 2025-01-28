<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function modifyString($s) {
        $s = str_split($s);
        $n = count($s);

        for($i = 0; $i < $n; $i++) {
            if($s[$i] == '?') {
                $left = ($i > 0) ? $s[$i - 1]: '';
                $right = ($i < $n - 1) ? $s[$i + 1]: '';

                foreach(['a', 'b', 'c'] as $char) {
                    if($s[$i - 1] != $char && $s[$i + 1] != $char) {
                        $s[$i] = $char;
                    }
                }
            }
        }

        return implode('', $s);
    }
}
