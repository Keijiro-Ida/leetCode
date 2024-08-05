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
     * @return Float[]
     */
    function averageOfLevels($root) {

        $averages = [];
        $queue = [$root];

        while($queue != null) {
            $count = count($queue);
            $levelSum = 0;
            for($i = 0; $i < $count; $i++) {
                $node = array_shift($queue);
                $levelSum += $node->val;

                if($node->left != null) $queue[] = $node->left;
                if($node->right != null) $queue[] = $node->right;
            }
            $averages[] = $levelSum / $count;
        }

        return $averages;
    }
}
