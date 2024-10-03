<?php

class Solution {

    /**
     * @param String $name
     * @param String $typed
     * @return Boolean
     */
    function isLongPressedName($name, $typed) {
        $i = 0;
        $j = 0;
        $typed_len = strlen($typed);
        $name_len = strlen($name);

        while($j < $typed_len) {
            if($i < $name_len && $name[$i] == $typed[$j]) {
                $i++;
            } elseif($j > 0 && $typed[$j] == $typed[$j - 1]) {

            } else {
                return false;
            }
            $j++;
        }

        return $i == $name_len;
    }
}
