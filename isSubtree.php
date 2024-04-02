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
     * @param TreeNode $subRoot
     * @return Boolean
     */
    function isSubtree($root, $subRoot) {

        if($root == null) {
            return $subRoot ==null;
        }

        if($this->isSametree($root, $subRoot)) {
            return true;
        }

        return $this->isSubtree($root->left, $subRoot) || $this->isSubtree($root->right, $subRoot);
    }

    function isSametree($s, $t) {
        if($s == null || $t == null) {
            return $s == $t;
        }
        if($s->val != $t->val) {
            return false;
        }
        return $this->isSametree($s->left, $t->left) && $this->isSametree($s->right, $t->right);
    }
}
