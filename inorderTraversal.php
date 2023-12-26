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
     * @return Integer[]
     */
    public $res = [];
    function inorderTraversal($root) {
        if($root->left != NULL) {
            $this->inorderTraversal($root->left);
        };
        array_push($this->res, $root->val);
        if($root->right != NULL) {
            $this->inorderTraversal($root->right);
        };

        return $this->res;
    }
}
