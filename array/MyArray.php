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

        $string .= ' -- capacity: ' . $this->capacity . ', size: ' . $this->size;
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
        if ($this->size >= $this->capacity) {
            $this->resize($this->capacity * 2);
        }
    }

    public function addFirst(int $value)
    {
        $this->add(0, $value);
    }

    public function addLast(int $value)
    {
        $this->add($this->size, $value);
    }

    public function delete(int $index)
    {
        if ($index < 0 || $index > $this->capacity - 1) {
            throw new Exception('out of range');
        }

        // 注意边界的处理
        for ($i = $index; $i < $this->size - 1; $i++) {
            $this->array[$i] = $this->array[$i + 1];
        }

        $this->size--;
        if ($this->size < $this->capacity / 2 && $this->capacity / 2 > 0) {
            $this->resize($this->capacity / 2);
        }
    }

    private function resize(int $newCapacity)
    {
        $newArray = array_fill(0, $newCapacity, null);
        for ($i = 0; $i < $this->size; $i++)
            $newArray[$i] = $this->array[$i];

        $this->array = $newArray;
        $this->capacity = $newCapacity;
    }

    public function get(int $index)
    {
        if ($index < 0 || $index > $this->capacity - 1) {
            throw new Exception('out of range');
        }

        return $this->array[$index];
    }

    public function getFirst()
    {
        return $this->get(0);
    }

    public function getLast()
    {
        return $this->get($this->size - 1);
    }

    public function set(int $index, int $value)
    {
        if ($index < 0 || $index > $this->capacity - 1) {
            throw new Exception('out of range');
        }

        $this->array[$index] = $value;
    }
}

$arr = new MyArray(3);
var_dump($arr->toString());
$arr->add(0, 12);
var_dump($arr->toString());
$arr->add(0, 3);
var_dump($arr->toString());
$arr->add(1, 7);
var_dump($arr->toString());
$arr->add(1, 2);
var_dump($arr->toString());
$arr->add(1, 66);
var_dump($arr->toString());
$arr->add(0, 4);
var_dump($arr->toString());
$arr->delete(1);
var_dump($arr->toString());
$arr->delete(1);
$arr->delete(1);
var_dump($arr->toString());
$arr->delete(0);
var_dump($arr->toString());
$arr->addFirst(124);
$arr->addLast(999);
var_dump($arr->toString());
