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
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {

       if($root === null) return false;

       if($root->left === null and $root->right === null) {
            return $targetSum == $root->val;
       }

       $targetSum -= $root->va;

       return $this->hasPathSum($root->left, $targetSum) || $this->hasPathSum($root->right, $targetSum);

    }
}
