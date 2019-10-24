<?php

class MyArray
{

    protected $data;
    protected $size;
    protected $capacity;

    public function __construct(int $capacity = 0)
    {
        $this->data = array_fill(0, $capacity, null);
        $this->capacity = $capacity;
        $this->size = 0;
    }

    public function toString()
    {
        $string = '';
        foreach ($this->data as $key => $value) {
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
            $this->data[$i + 1] = $this->data[$i];
        }

        $this->data[$index] = $value;
        $this->size++;
        if ($this->size >= $this->capacity) {
            $this->resize($this->capacity * 2);
        }

        return $value;
    }

    public function addFirst(int $value)
    {
        return $this->add(0, $value);
    }

    public function addLast(int $value)
    {
        return $this->add($this->size, $value);
    }

    public function delete(int $index)
    {
        if ($index < 0 || $index > $this->capacity - 1) {
            throw new Exception('out of range');
        }

        // 注意边界的处理
        for ($i = $index; $i < $this->size - 1; $i++) {
            $this->data[$i] = $this->data[$i + 1];
        }

        $returnValue = $this->data[$this->size - 1];
        $this->data[$this->size - 1] = null;
        $this->size--;
        if ($this->size < $this->capacity / 2 && $this->capacity / 2 > 0) {
            $this->resize($this->capacity / 2);
        }
        return $returnValue;
    }

    public function deleteFirst()
    {
        return $this->delete(0);
    }

    public function deleteLast()
    {
        return $this->delete($this->size - 1);
    }

    protected function resize(int $newCapacity)
    {
        $newArray = array_fill(0, $newCapacity, null);
        for ($i = 0; $i < $this->size; $i++)
            $newArray[$i] = $this->data[$i];

        $this->data = $newArray;
        $this->capacity = $newCapacity;
    }

    public function get(int $index)
    {
        if ($index < 0 || $index > $this->capacity - 1) {
            throw new Exception('out of range');
        }

        return $this->data[$index];
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

        $this->data[$index] = $value;
    }
}
