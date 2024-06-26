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
    function preorder($root) {
        $result = [];

        $this->traverse($root, $result);
        return $result;
    }

    function traverse($node, &$result) {
        if($node == null) return;

        $result[] = $node->val;

        foreach($node->children as $child) {
            $this->traverse($child, $result);
        }

        return;
    }
}
