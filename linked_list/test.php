<?php

require_once 'SingleLinkList.php';

$link = new SingleLinkList();
$link->addLast(new Node(1));
var_dump($link->getTail());
$link->addLast(new Node(2));
var_dump($link->getTail());
$link->insertNodeByIndex(3, new Node(3));
var_dump($link->getTail());
$link->addLast(new Node(4));
$link->addLast(new Node(5));
echo $link->getLength(), PHP_EOL;
$link->showNode();
//echo '-----------', PHP_EOL;
//var_dump($link->searchNodeByIndex(3));
echo '-----------', PHP_EOL;
$link->deleteNodeByIndex(3);
$link->showNode();