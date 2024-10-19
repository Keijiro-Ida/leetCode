<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function commonChars($words) {

        $commonCount = array_count_values(str_split($words[0]));

        for($i = 1; $i < count($words); $i++) {

            $wordCount = array_count_values(str_split($words[$i]));

            foreach($commonCount as $char => $count) {
                if(isset($wordCount[$char])) {
                    $commonCount[$char] = min($wordCount[$char], $commonCount[$char]);
                } else {
                    $commonCount[$char] = 0;
                }
            }
        }
        $result = [];

        foreach($commonCount as $char => $count) {
            for($i = 0; $i < $count; $i++) {
                $result[] = $char;
            }
        }

        return $result;
    }
}
