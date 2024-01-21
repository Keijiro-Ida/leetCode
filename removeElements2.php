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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {

        if($head->val == $val) {
            $head = $head->next;
        }

        if($head) {
            if($head->val == $val) {
                $head = $this->removeElements($head, $val);

            } else {
                $head->next = $this->removeElements($head->next, $val);
            }
        }
        return $head;

    }

}
