<?php
include_once 'Node.php';
include_once 'Queue.php';

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
echo '<pre>';
var_dump($queue);