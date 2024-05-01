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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {

        if($nums == null) return null;

        return $this->constructBST($nums, 0, count($nums)-1);
    }

    function constructBST($nums, $left, $right) {

        if($left > $right) return null;

        $mid = intdiv($left+$right, 2);

        $node = new TreeNode($nums[$mid]);
        $node->left = $this->constructBST($nums, $left, $mid-1);
        $node->right = $this->constructBST($nums, $mid+1, $right);

        return $node;
    }
}
