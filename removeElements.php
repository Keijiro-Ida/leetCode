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

        if(!$head) return [];
        $pointer = $head;

        while($head->val == $val) {
            $head = $head->next;
        }

        while($pointer) {
            if($pointer->next->val === $val) {
                $pointer->next = $pointer->next->next;
            } else {
                $pointer = $pointer->next;
            }
        }

        return $head;

    }

}
