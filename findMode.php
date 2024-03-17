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
    private $count = [];
    private $maxCount = 0;
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function findMode($root) {

        $this->findModeRecursive($root);
        $modes = [];

        foreach($this->counts as $val => $count) {
            if($count == $this->maxCount) {
                $modes[] = $val;
            }
        }
        return $modes;

    }


    private function findModeRecursive($node) {
        if($node == null) return;

        if(!isset($this->counts[$node->val])) {
            $this->counts[$node->val] = 1;
        } else {
            $this->counts[$node->val]++;
        }

        $this->maxCount = max($this->maxCount, $this->counts[$node->val]);

        $this->findModeRecursive($node->left);
        $this->findModeRecursive($node->right);

    }

}
