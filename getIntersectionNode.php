<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

 class Solution {
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode($headA, $headB) {

        $lenA = $this->getListLength($headA);
        $lenB = $this->getListLength($headB);

        while($lenA > $lenB) {
            $headA = $headA->next;
            $lenA--;
        }
        while($lenA < $lenB) {
            $headB = $headB->next;
            $lenB--;
        }

        while($headA !== $headB) {
            $headA = $headA->next;
            $headB = $headB->next;

        }
        return $headA;
    }

    public function getListLength($head) {
        $length = 0;

        while($head) {
            $length++;
            $head = $head->next;
        }
        return $length;
    }
}
