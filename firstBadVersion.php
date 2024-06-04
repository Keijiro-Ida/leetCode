<?php

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

      class Solution extends VersionControl {
        /**
         * @param Integer $n
         * @return Integer
         */
        function firstBadVersion($n) {
            $start = 1;
            $end = $n;

            while($start <= $end) {
                $mid = floor(($start + $end) / 2);

                if($this->isBadVersion($mid)) {
                    $bad = $mid;
                    $end = $mid - 1;
                } else {
                    $start = $mid + 1;
                }
            }

            return $bad;
        }
    }
