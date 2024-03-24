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

    private $prev = null;
    private $minDiff = PHP_INT_MAX;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function getMinimumDifference($root) {

        $this->inOrder($root);
        return $this->minDiff;
    }
    function inOrder($node) {
        if ($node == null) return;
        $this->inOrder($node->left);

        if ($this->prev !== null) {
            $this->minDiff = min($this->minDiff, abs($node->val - $this->prev));
        }
        $this->prev = $node->val;

        $this->inOrder($node->right);
    }
}
