<?php
require_once('fifoQueueContainer.php');

class fifoQueue
{
	private $head = null;
	private $tail = null;

	public function __construct()
	{
	
	}
	
	public function addItem($obj)
	{
		$container = new fifoQueueContainer($obj);
		
		if($this->head === null)
		{
			$this->head = $container;
			$this->tail = $container;
		}
		else
		{
			$this->tail->setNext($container);
			$this->tail = $container;
		}
	}
	
	public function getItem()
	{
		$return;
		
		if($this->head === null)
		{
			throw new Exception("Queue is Empty");
		}
		else
		{
			$return = $this->head->getObject();
			$this->head = $this->head->getNext();
		}
		
		return $return;
	}
}
?>