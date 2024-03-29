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
        $depth = $this->depth($root);
        return $depth;
    }

    function depth($node) {
        if($node == null) return 0;

        $maxDepth = 0;

        foreach($node->children as $child) {
            $childDepth = $this->depth($child);

            if($maxDepth < $childDepth) $maxDepth = $childDepth;
        }

        return $maxDepth + 1;
    }
}
