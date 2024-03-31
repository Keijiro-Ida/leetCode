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
    private $totalTilt = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function findTilt($root) {
       $this->calculateTilt($root);

       return $this->totalTilt;
    }

    function calculateTilt($node) {
        if($node == null) return 0;

        $leftSum = $this->calculateTilt($node->left);
        $rightSum = $this->calculateTilt($node->right);

        $this->totalTilt += abs($leftSum - $rightSum);


        return $node->val + $leftSum + $rightSum;
    }
}
