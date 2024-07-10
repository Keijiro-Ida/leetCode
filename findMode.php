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

        if($root === null) return [];

        $this->traverse($root);

        $modes = [];

        foreach($this->count as $key => $val) {
            if($val == $this->maxCount) {
                $modes[] = $key;
            }
        }

        return $modes;

    }

    function traverse($node) {
        if($node === null) return;

        if(isset($this->count[$node->val]) ){
            $this->count[$node->val] += 1;
        } else {
            $this->count[$node->val] = 0;
        }

        $this->maxCount = max($this->maxCount, $this->count[$node->val]);

        $this->traverse($node->left);
        $this->traverse($node->right);
    }


}
