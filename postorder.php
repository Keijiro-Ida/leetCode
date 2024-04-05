<?php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

 class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function postorder($root) {
        $result = [];
        if($root == null) return $result;

        $this->reverseOrder($root, $result);
        return $result;
    }

    function reverseOrder($node, &$result) {
        if($node == null) return;

        foreach($node->children as $child) {
            $this->reverseOrder($child, $result);
        }
        $result[] = $node->val;

        return;
    }
}
