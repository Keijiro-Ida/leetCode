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

        return $this->isSameTree($root, $subRoot);
    }

    function isSametree($s, $t) {

        if($s == null) return $t == null;
        if($s == $t) {
            return true;
        }

        return $this->isSametree($s->left, $t) || $this->isSametree($s->right, $t);


    }
}
