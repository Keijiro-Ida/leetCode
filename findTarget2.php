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
     * @param Integer $k
     * @return Boolean
     */
    function findTarget($root, $k) {

        $set = [];
        return $this->findTrue($root, $k, $set);
    }

    function findTrue($node, $k, &$set) {

        if($node == null) return false;

        if(in_array($k - $node->val, $set)) {
            return true;
        }

        $set[] = $node->val;

        return $this->findTrue($node->left, $k, $set) || $this->findTrue($node->right, $k, $set);

    }
}
