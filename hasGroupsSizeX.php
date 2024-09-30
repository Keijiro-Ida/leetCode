<?php
class Solution {

    /**
     * @param Integer[] $deck
     * @return Boolean
     */
    function hasGroupsSizeX($deck) {

        $count = array_count_values($deck);

        $counts = array_values($count);

        $gcdValue = $counts[0];

        foreach($counts as $c) {
            $gcdValue = $this->gcd($gcdValue, $c);
        }

        return $gcdValue >= 2;
    }

    function gcd($a, $b) {
        while($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }
}class Solution {

    /**
     * @param Integer[] $deck
     * @return Boolean
     */
    function hasGroupsSizeX($deck) {

        $count = array_count_values($deck);

        $counts = array_values($count);

        $gcdValue = $counts[0];

        foreach($counts as $c) {
            $gcdValue = $this->gcd($gcdValue, $c);
        }

        return $gcdValue >= 2;
    }

    function gcd($a, $b) {
        while($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }
}class Solution {

    /**
     * @param Integer[] $deck
     * @return Boolean
     */
    function hasGroupsSizeX($deck) {

        $count = array_count_values($deck);

        $counts = array_values($count);

        $gcdValue = $counts[0];

        foreach($counts as $c) {
            $gcdValue = $this->gcd($gcdValue, $c);
        }

        return $gcdValue >= 2;
    }

    function gcd($a, $b) {
        while($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }
}
