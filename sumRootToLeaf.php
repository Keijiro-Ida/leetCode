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
     * @return Integer
     */
    function sumRootToLeaf($root) {
        return $this->dfs($root, 0);
    }

    function dfs($node, $currentSum) {
        if($node === null) {
            return 0;
        }

        $currentSum = ($currentSum << 1) | $node->val;

        if($node->left === null && $node->right == null) {
            return $currentSum;
        }

        return $this->dfs($node->left, $currentSum) + $this->dfs($node->right, $currentSum);

    }
}
