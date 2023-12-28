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

    private \SplQueue $queueLeft;
    private \SplQueue $queueRight;

    public function __construct() {
        $this->queueLeft = new \SplQueue;
        $this->queueRight = new \SplQueue;
    }

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {

       if(!$root) return false;
       if($root->left->val != $root->right->val) {
           return false;
       }

       $this->queueLeft->enqueue($root->left);
       $this->queueRight->enqueue($root->right);

       while(!$this->queueLeft->isEmpty()) {
           $leftNode = $this->queueLeft->dequeue();
           $rightNode = $this->queueRight->dequeue();

            if(is_null($leftNode) && is_null($rightNode)) continue;

            if($leftNode->val !== $rightNode->val) return false;

            $this->queueLeft->enqueue($leftNode->left);
            $this->queueLeft->enqueue($leftNode->right);

            $this->queueRight->enqueue($rightNode->right);
            $this->queueRight->enqueue($rightNode->left);

       }
       return true;
    }
}
