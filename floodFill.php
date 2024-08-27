<?php

class Solution {


    private $rows;
    private $cols;
    private $originalColor;

    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $color) {
        $this->rows = count($image);
        $this->cols = count($image[0]);
        $this->originalColor = $image[$sr][$sc];

        if($this->originalColor == $color) return $image;

        $this->dfs($image, $sr, $sc, $color);

        return $image;
    }

    function dfs(&$image, $r, $c, $color) {

        if($r < 0 || $r >= $this->rows || $c < 0 || $c >= $this->cols || $image[$r][$c] != $this->originalColor) {
            return;
        }

        $image[$r][$c] = $color;

        $this->dfs($image, $r + 1, $c, $color);
        $this->dfs($image, $r, $c + 1, $color);
        $this->dfs($image, $r - 1, $c, $color);
        $this->dfs($image, $r, $c - 1, $color);
    }
}
