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
    function maxDepth($root) {

        if(!$root) return 0;

        $leftDepth = $this->maxDepth($root->left)+1;
        $rightDepth = $this->maxDepth($root->right)+1;

        return $leftDepth > $rightDepth? $leftDepth: $rightDepth;

    }
}
