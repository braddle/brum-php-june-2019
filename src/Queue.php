<?php
namespace Braddle;

class Queue
{
    private $size = 0;
    private $queue = [];
    private $front = 0;

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function join(string $name)
    {
        $this->queue[$this->size++] = $name;
    }

    public function size()
    {
        return $this->size;
    }

    public function dequeue()
    {
        return $this->queue[$this->front++];
    }
}
