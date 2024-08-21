<?php


class MyHashSet {
    /**
     */
    function __construct() {
        $this->set = [];
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {
        $this->set[] = $key;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        foreach(array_keys($this->set, $key) as $index) {
            unset($this->set[$index]);
        }
        $this->set = array_values($this->set);
    }

    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key) {
        return in_array($key, $this->set);
    }
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */
