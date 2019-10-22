<?php

class MyArray
{

    private $array;
    private $size;
    private $capacity;

    public function __construct(int $capacity)
    {
        $this->array = array_fill(0, $capacity, null);
        $this->capacity = $capacity;
        $this->size = 0;
    }

    public function toString()
    {
        $string = '';
        foreach ($this->array as $key => $value) {
            $string .= sprintf('%d => %s; ', $key, $value);
        }

        return $string;
    }

    public function add(int $index, int $value)
    {
        if ($index < 0 || $index > $this->capacity - 1) {
            throw new Exception('out of range');
        }

        // 注意边界的处理
        for ($i = $this->size - 1; $i >= $index; $i--) {
            $this->array[$i + 1] = $this->array[$i];
        }

        $this->array[$index] = $value;
        $this->size++;

    }
}

$arr = new MyArray(8);
var_dump($arr->toString());
$arr->add(0, 12);
var_dump($arr->toString());
$arr->add(0, 3);
var_dump($arr->toString());
$arr->add(1, 3);
var_dump($arr->toString());
