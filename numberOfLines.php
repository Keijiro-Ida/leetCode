<?php

class Solution {

    /**
     * @param Integer[] $widths
     * @param String $s
     * @return Integer[]
     */
    function numberOfLines($widths, $s) {
        $alphabets = range('a', 'z');
        $widthMap = array_combine($alphabets, $widths);

        $rowWidth = 0;
        $rows = 1;
        for($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            $charWidth = $widthMap[$char];

            if($rowWidth + $charWidth > 100) {
                $rows++;
                $rowWidth = $charWidth;
            } else {
                $rowWidth += $charWidth;
            }
        }

        return [$rows, $rowWidth];
    }
}
