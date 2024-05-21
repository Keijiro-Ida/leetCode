<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {

        return $this->transforming($s) === $this->transforming($t);
    }

    function transforming($string) {
        $mapping = [];
        $transformmed = [];
        $index = 0;

        for($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];
            if(!isset($mapping[$char])) {
                $mapping[$char] = $index++;
            }
            $transformetted[] = $mapping[$char];
        }

        return implode(',', $transformetted);
    }
}
