<?php
require_once 'ArrayStack.php';

$stack = new ArrayStack(5);
for ($i = 0; $i <= 4; $i++) {
    $stack->push($i);
    var_dump($stack->getSize());
    var_dump($stack->get($i));
    var_dump($stack->toString());
}

var_dump($stack->peek());
$stack->pop();
$stack->pop();
var_dump($stack->peek());
var_dump($stack->toString());