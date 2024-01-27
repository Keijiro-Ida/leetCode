<?php

class MyStack {

    public $queue = [];
    /**
     */
    function __construct() {
        $this->queue = [];
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->queue, $x);
    }

    /**
     * @return Integer
     */
    function pop() {
        return array_pop($this->queue);
    }

    /**
     * @return Integer
     */
    function top() {
        return end($this->queue);
    }

    /**
     * @return Boolean
     */
    function empty() {
        if(count($this->queue) == 0 )return true;
        return false;
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
