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

    private $max = 0;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root) {
        $this->depth($root);
        return $this->max;
    }

    function depth($node) {
            if($node == null) return 0;

            $left = $node->left == null ? 0 : 1 + $this->depth($node->left);
            $right = $node->right == null ? 0 : 1 + $this->depth($node->right);
            $this->max = max($left + $right, $this->max);

            return max($left, $right);
        }


}
