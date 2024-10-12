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
     * @return Boolean
     */
    function isUnivalTree($root) {

        if($root == null) return true;

        if($root->left != null && $root->val != $root->left->val) {
            return false;
        }
        if($root->right != null && $root->val != $root->right->val) {
            return false;
        }

        return $this->isUnivalTree($root->left) && $this->isUnivalTree($root->right);

    }
}
