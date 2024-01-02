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
    function minDepth($root) {
        if($root == null) return 0;

        $left = $this->minDepth($root->left);
        $right = $this->minDepth($root->right);

        if($left != 0 && $right != 0) {
            return min($left, $right) + 1;
        } elseif($left == 0) {
            return $right + 1;
        } else {
            return $left + 1;
        }
    }
}
