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
    function postorderTraversal($root) {

        if($root == null) return [];

        $arr = [];

        if($root->left != null) {
            $arr = array_merge($arr, $this->postorderTraversal($root->left));
        }
        if($root->right != null) {
            $arr = array_merge($arr, $this->postorderTraversal($root->right));
        }
        $arr[] = $root->val;

        return $arr;
    }
}
