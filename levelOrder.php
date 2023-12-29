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
     * @return Integer[][]
     */
    function levelOrder($root) {

        if(!$root) return [];

        $values = [];
        $queue = [$root];

        while(!empty($queue)) {
            $level = [];
            $size = count($queue);

            for($i = 0; $i < $size; $i++) {
                $current = array_shift($queue);
                $level[] = $current->val;

                if($current->left) $queue[] = $current->left;
                if($current->right) $queue[] = $current->right;

            }
            $values[] = $level;
        }

        return $values;

    }
}
