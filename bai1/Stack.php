<?php

class Stack
{
    public $stack;
    public $limit;
    public function __construct($limit = 5)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        }else {
            echo 'Day roi!';
        }
    }

    public function pop()
    {
        $this->isEmpty();
        array_shift($this->stack);
    }

    public function top($index)
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        if (empty($this->stack)) {
            echo 'khong co gi';
        }
    }



}