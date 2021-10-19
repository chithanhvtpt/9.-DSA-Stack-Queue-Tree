<?php

class Queue
{
    public $queue;
    public $limit;
    public $name;
    public $code;
    public function __construct($name, $code)
    {
        $this->queue = [];
        $this->limit = 6;
        $this->code = $code;
        $this->name = $name;
    }

    public function enqueue($index)
    {
        if (count($this->queue) <= $this->limit) {
            array_push($this->queue, $index);
        }else {
            echo 'Đủ số bệnh nhân rồi!!';
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return 'Có gì đâu mà xóa';
        } else {
            return array_shift($this->queue);
        }
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function toString()
    {
        return 'Mã bệnh nhân : '. $this->code . '. Một bệnh nhân mới tên là : ' . $this->name . '<br>';
    }

    public function sortPatient()
    {
        sort($this->queue,1);
    }


}