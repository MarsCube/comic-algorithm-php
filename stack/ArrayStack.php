<?php
require_once __DIR__ . '/../array/MyArray.php';

class ArrayStack extends MyArray
{

    public function __construct($capacity)
    {
        parent::__construct($capacity);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function push($value)
    {
        return $this->addLast($value);
    }

    public function pop()
    {
        return $this->deleteLast();
    }

    public function peek()
    {
        return $this->getLast();
    }

    public function toString()
    {
        $string = 'Bottom';
        for ($i = 0; $i < $this->size; $i++) {
            $string .= ' -> ' . $this->get($i);
        }

        $string .= ' -> Top';
        return $string;
    }
}

