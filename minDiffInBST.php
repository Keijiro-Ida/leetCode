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
    function minDiffInBST($root) {
        $values = [];
        $this->inorder($root, $values);

        $minDiff = PHP_INT_MAX;

        for($i = 1; $i < count($values); $i++) {
            $minDiff = min($minDiff, $values[$i] - $values[$i - 1]);
        }
        return $minDiff;
    }

    function inorder($node, &$values) {
        if($node == null) return;

        $this->inorder($node->left, $values);
        $values[] = $node->val;
        $this->inorder($node->right, $values);
    }
}
