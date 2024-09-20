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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2) {
        $leaves1 = [];
        $leaves2 = [];

        $this->dfs($root1, $leaves1);
        $this->dfs($root2, $leaves2);

        return $leaves1 == $leaves2;
    }

    function dfs($node, &$leaves) {
        if($node == null) return;

        if($node->left == null && $node->right == null) {
            $leaves[] = $node->val;
        }

        $this->dfs($node->left, $leaves);
        $this->dfs($node->right, $leaves);
    }

}
