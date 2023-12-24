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
     * @return ListNode
     */
    function deleteDuplicates($head) {

        $current = $head->next;
        $prev = $head;

        while($current != null) {

            if($prev->val == $current->val) {
                $prev->next = $current->next;
                $current = $current->next;
            } else {
                $prev = $current;
                $current = $current->next;
            }
        }

        return $head;

    }
}
