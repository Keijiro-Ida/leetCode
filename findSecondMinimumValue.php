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
    function findSecondMinimumValue($root) {
        if($root === null) return -1;

        $min = $root->val;
        $secondMin = PHP_INT_MAX;
        $found = false;

        $this->findSecondMinimumHelper($root, $min, $secondMin, $found);

        return $found ? $secondMin : -1;
    }

    function findSecondMinimumHelper($node, $min,&$secondMin, &$found) {

        if($node === null) return;

        if($node->val > $min && $node->val < $secondMin) {
            $secondMin = $node->val;
            $found = true;
        }

        $this->findSecondMinimumHelper($node->left, $min, $secondMin, $found);
        $this->findSecondMinimumHelper($node->right, $min, $secondMin, $found);

    }
}
