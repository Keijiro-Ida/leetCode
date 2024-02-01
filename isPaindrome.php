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
        $values = [];

        while($head) {
            $values[] = $head->val;
            $head = $head->next;
        }

        return $values == array_reverse($values);
    }
}
