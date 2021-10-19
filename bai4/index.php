<?php
include_once 'Stack.php';
$stack = new Stack();
$stackNew = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
//$stack->pop();
//$stack->pop();
//$stack->pop();
//$stack->pop();;
echo '<pre>';
print_r($stack);