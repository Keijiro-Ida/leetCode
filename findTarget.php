<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Boolean
     */
    function findTarget($root, $k) {
        $seen = [];

        return $this->inorder($root, $k, $seen);
    }

    function inorder($node, $k, &$seen) {
        if($node == null) return false;

        if($this->inorder($node->left, $k, $seen)) {
            return true;
        }

        if(array_key_exists($k - $node->val, $seen)) {
            return true;
        }

        $seen[$node->val] = true;

        return $this->inorder($node->right, $k, $seen);
    }
}
