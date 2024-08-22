<?php

class MyHashMap {
    /**
     */
    function __construct() {
        $this->map = [];
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        foreach($this->map as &$map) {
            if($map[0] == $key) {
                $map[1] = $value;
                return;
            }
        }
        $this->map[] = [$key, $value];
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {

        foreach($this->map as $map) {
            if($map[0] == $key) return $map[1];
        }

        return -1;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {

        $this->map = array_filter($this->map, function($element) use ($key) {
            return $element[0] != $key;
        });

        $this->map = array_values($this->map);
    }
}

/**
 * Your MyHashMap object will be instantiated and called as such:
 * $obj = MyHashMap();
 * $obj->put($key, $value);
 * $ret_2 = $obj->get($key);
 * $obj->remove($key);
 */
