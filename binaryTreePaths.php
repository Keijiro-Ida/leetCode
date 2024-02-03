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
     * @return String[]
     */
    function binaryTreePaths($root) {

        $results = [];
        $currentPath = '';

        return $this->dfs($root, $results, $currentPath);
    }

    function dfs($root, $results, $currentPath) {
        if(!$root->left && !$root->right) {
            $currentPath .= $root->val;
            $results[] = $currentPath;
            return $results;
        }

        $currentPath .= $root->val . '->';

        if($root->left) {
            $results = $this->dfs($root->left, $results, $currentPath);
        }
        if($root->right) {
            $results = $this->dfs($root->right, $results, $currentPath);
        }

        return $results;
    }
}
