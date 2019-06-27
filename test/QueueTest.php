<?php
namespace Braddle\Test;

use Braddle\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testIsEmpty()
    {
        $queue = new Queue();

        $this->assertTrue($queue->isEmpty());
    }

    public function testIsNotEmpty()
    {
        $queue = new Queue();
        $queue->join("Bob");


        $this->assertFalse($queue->isEmpty());
    }

    public function testEmptyQueueSizeZero()
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->size());
    }

    public function testOneQueue()
    {
        $queue = new Queue();
        $queue->join("Bob");

        $this->assertEquals(1, $queue->size());
    }

    public function testTwoQueue()
    {
        $queue = new Queue();
        $queue->join("Bob");
        $queue->join("Jim");

        $this->assertEquals(2, $queue->size());
    }

    public function testDeQueueOne()
    {
        $queue = new Queue();
        $queue->join("Bob");

        $this->assertEquals("Bob", $queue->dequeue());
    }

    public function testDequeueTwo()
    {
        $queue = new Queue();
        $queue->join("Bob");
        $queue->join("Jim");

        $this->assertEquals("Bob", $queue->dequeue());
        $this->assertEquals("Jim", $queue->dequeue());
    }
}
