<?php

require_once 'MyArray.php';

$arr = new MyArray(6);
for ($i = 0; $i < 5; $i++) {
    $arr->addLast($i);
}

var_dump($arr->toString());
var_dump($arr->getFirst());
var_dump($arr->getLast());

$arr->addLast(999);
$arr->add(3, 666);
var_dump($arr->toString());
$arr->set(3, 123);
var_dump($arr->toString());
var_dump($arr->get(3));
var_dump($arr->toString());
$arr->deleteLast();
var_dump($arr->toString());
$arr->deleteFirst();
var_dump($arr->toString());
$arr->delete(2);
var_dump($arr->toString());