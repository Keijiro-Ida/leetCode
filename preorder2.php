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

        if($root == null) return $result;

        $stack = [$root];

        while(!empty($stack)) {
            $node = array_pop($stack);
            $result[] = $node->val;

            for ($i = count($node->children) - 1; $i >= 0; $i--) {
                $stack[] = $node->children[$i];
            }
        }

        return $result;
    }
}
