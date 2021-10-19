<?php
include_once 'Queue.php';
$queue1 = new Queue('Smith', 5);
$queue2 = new Queue('Jones', 4);
$queue3 = new Queue('Fehrenbach', 6);
$queue4 = new Queue('Brown', 2);
$queue5 = new Queue('Ingram', 1);
echo $queue1->toString();
echo $queue2->toString();
echo $queue3->toString();
echo $queue4->toString();
echo $queue5->toString();
$queue = new Queue('STT','Bệnh nhân');
$queue->enqueue($queue1);
$queue->enqueue($queue2);
$queue->enqueue($queue3);
$queue->enqueue($queue4);
$a = $queue->dequeue();
$queue->sortPatient();
echo '<pre>';
print_r($a);
print_r($queue);


