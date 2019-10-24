<?php

class Node
{
    public $data;

    /**
     * @var null | Node
     */
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

}