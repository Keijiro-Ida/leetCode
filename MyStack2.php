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
        $this->queue[] = $x;

        return null;
    }

    /**
     * @return Integer
     */
    function pop() {

        $key = array_key_last($this->queue);

        $last = $this->queue[$key];

        unset($this->queue[$key]);

        return $last;
    }

    /**
     * @return Integer
     */
    function top() {
        return $this->queue[array_key_last($this->queue)];
    }

    /**
     * @return Boolean
     */
    function empty() {
        return !$this->queue;
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
