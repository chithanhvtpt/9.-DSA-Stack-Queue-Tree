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

    public function push()
    {
        if (count($this->stack) <= $this->limit) {
            array_push($this->stack);
        }else {
            echo 'Đã đầy !!';
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo 'Không có gì';
        }else {
            array_pop($this->stack);
        }

    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}