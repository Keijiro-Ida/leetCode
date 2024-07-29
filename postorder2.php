<?php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

 class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function postorder($root) {
        $result = [];
        if($root == null) return $result;

        $stack = [$root];
        $output = [];
        while(!empty($stack)) {
            $node = array_pop($stack);
            $output[] = $node->val;

            foreach($node->children as $child) {
                $stack[] = $child;
            }
        }

        $result = array_reverse($output);

        return $result;
    }
}
