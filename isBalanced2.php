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
    function isBalanced($root) {

        if($root === null) return true;

        $leftHeight = $this->getHeight($root->left);
        $rightHeight = $this->getHeight($root->right);

        if(abs($leftHeight - $rightHeight) > 1) return false;

        return $this->isBalanced($root->left) && $this->isBalanced($root->right);
    }

    function getHeight($node) {

        if($node === null) return 0;

        return max($this->getHeight($node->left), $this->getHeight($node->right))+1;

    }
}
