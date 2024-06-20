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
    function sumOfLeftLeaves($root) {

        $sum = 0;

        $this->helper($root->left, true, $sum);
        $this->helper($root->right, false, $sum);

        return $sum;

    }


    function helper($node, $isLeft, &$sum) {
        if($node == null) return;

        if($node->left == null && $node->right == null && $isLeft) {
            $sum += $node->val;
        }

        $this->helper($node->left, true, $sum);
        $this->helper($node->right, false, $sum);
    }
}
