<?php

class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2) {
        $words1 = explode(' ', $s1);
        $words2 = explode(' ', $s2);

        $count1 = array_count_values($words1);
        $count2 = array_count_values($words2);

        $answer = [];
        foreach($count1 as $word => $count) {
            if($count == 1 && !isset($count2[$word])) {
                $answer[] = $word;
            }
        }
         foreach($count2 as $word => $count) {
            if($count == 1 && !isset($count1[$word])) {
                $answer[] = $word;
            }
        }

        return $answer;
    }
}
