<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numPrimeArrangements($n) {
        $MOD = 1000000007;

        // 素数の数を計算する関数
        $numPrimes = $this->countPrimes($n);
        $numNonPrimes = $n - $numPrimes;

        // 素数の順列数と非素数の順列数を計算
        $primeArrangements = $this->factorialMod($numPrimes, $MOD);
        $nonPrimeArrangements = $this->factorialMod($numNonPrimes, $MOD);

         return ($primeArrangements * $nonPrimeArrangements) % $MOD;
    }

    // エラトステネスの篩を使って1からnまでの素数の数をカウント
    private function countPrimes($n) {
        $isPrime = array_fill(0, $n + 1, true);
        $isPrime[0] = $isPrime[1] = false;

        for ($i = 2; $i * $i <= $n; $i++) {
            if ($isPrime[$i]) {
                for ($j = $i * $i; $j <= $n; $j += $i) {
                    $isPrime[$j] = false;
                }
            }
        }

        $count = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($isPrime[$i]) $count++;
        }

        return $count;
    }

    // 階乗を計算し、大きな数に対処するためMODを適用
    private function factorialMod($num, $mod) {
        $result = 1;
        for ($i = 1; $i <= $num; $i++) {
            $result = ($result * $i) % $mod;
        }
        return $result;
    }

}
