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
     * @param Integer $x
     * @param Integer $y
     * @return Boolean
     */
    function isCousins($root, $x, $y) {
        $x_info = ['depth' => -1, 'parent' => null];
        $y_info = ['depth' => -1, 'parent' => null];

        $this->find_depth_and_parent($root, null, 0, $x, $x_info);
        $this->find_depth_and_parent($root, null, 0, $y, $y_info);

        return ($x_info['depth'] == $y_info['depth'] && $x_info['parent'] != $y_info['parent']);
    }

    function find_depth_and_parent($node, $parent, $depth, $target, &$result) {
        if($node == null) return;

        if($node->val == $target) {
            $result['depth'] = $depth;
            $result['parent'] = $parent;
            return;
        }

        $this->find_depth_and_parent($node->left, $node, $depth + 1, $target, $result);
        $this->find_depth_and_parent($node->right, $node, $depth + 1, $target, $result);
    }
}
