<?php

class MyQueue {
    private $stacIn;
    private $stackOut;
    /**
     */
    function __construct() {
        $this->stackIn = [];
        $this->stackOut = [];
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stackIn[] = $x;
    }

    /**
     * @return Integer
     */
    function pop() {
        if(!empty($this->stackOut)) {
            return array_pop($this->stackOut);
        }
        while(!empty($this->stackIn)) {
            array_push($this->stackOut, array_pop($this->stackIn));
        }

        return array_pop($this->stackOut);
    }

    /**
     * @return Integer
     */
    function peek() {
        if(empty($this->stackOut)) {
            return $this->stackIn[0];
        }
        return $this->stackOut[count($this->stackOut) - 1];
    }

    /**
     * @return Boolean
     */
    function empty() {
        return empty($this->stackIn) && empty($this->stackOut);
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
