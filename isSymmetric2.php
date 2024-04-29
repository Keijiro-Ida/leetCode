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
     * @return Boolean
     */
    function isSymmetric($root) {

       if($root == null) return true;

       $queue = [];
       array_push($queue, $root, $root);
       while(!empty($queue)) {
            $t1 = array_shift($queue);
            $t2 = array_shift($queue);


            if($t1 == null && $t2 == null) {
                continue;
            }
            if($t1 == null || $t2 == null) {
                return false;
            }
            if($t1->val !== $t2->val) {
                return false;
            }
            array_push($queue, $t1->left, $t2->right);
            array_push($queue, $t1->right, $t2->left);

       }

       return true;
    }
}
