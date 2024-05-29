<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        $slow = $head;
        $fast = $head;

        while($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        $prev = null;
        while($slow !== null) {
            $next = $slow->next;
            $slow->next = $prev;
            $prev = $slow;
            $slow = $next;
        }

        while($prev !== null) {
            if($head->val !== $prev->val) return false;
            $head = $head->next;
            $prev = $prev->next;
        }

        return true;

    }
}
