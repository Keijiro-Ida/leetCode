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
     * @return integer
     */
    function maxDepth($root) {
        if($root === null) return 0;

        $depth = 0;

        foreach($root->children as $child) {
            $depth = max($depth, $this->maxDepth($child));
        }

        return $depth + 1;
    }
}
