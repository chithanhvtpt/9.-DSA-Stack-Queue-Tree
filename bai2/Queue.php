<?php
include_once 'Node.php';
class Queue
{
    public $front;
    public $back;
    public function __construct()
    {
        $this->front = null;
        $this->back = null;
    }

    public function enqueue($value)
    {
        $node = new Node();
        $this->back = $node;
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        }else {
            $this->back->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $node = new Node();
        $this->front = $node;
        $this->frort = $this->front->next;
        return $this->front->next;
    }

    public function isEmpty()
    {
        return is_null($this->front);

    }
}