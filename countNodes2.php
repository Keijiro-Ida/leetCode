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
    function countNodes($root) {
        if($root === null) return 0;

        $left = $this->getDepth($root->left);
        $right =  $this->getDepth($root->right);

        if($left === $right) {
            return (1 << $left) + $this->countNodes($right);
        } else {
            return (1 << $right) + $this->countNodes($left);
        }
    }

    function getDepth($node) {
        $depth = 0;

        while($node != null) {
            $depth++;
            $node = $node->left;
        }
        return $depth;
    }
}
