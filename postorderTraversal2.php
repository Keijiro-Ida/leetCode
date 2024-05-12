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

        if($root === null) return [];
        $result = [];
        $this->helper($root, $result);
        return $result;

    }

    function helper($node, &$result) {
        if($node === null) return $result;

        $this->helper($node->left, $result);
        $this->helper($node->right, $result);

        $result[] = $node->val;
        return $result;
    }
}
