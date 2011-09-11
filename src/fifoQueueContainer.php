<?php

class fifoQueueContainer
{

	private $objectToStore;
	private $nextContainer = null;
	
	public function __construct($obj)
	{
		$this->objectToStore = $obj;
	}
	
	public function setNext($next)
	{
		$this->nextContainer = $next;
	}
	
	public function getNext()
	{
		return $this->nextContainer;
	}
	
	public function getObject()
	{
		return $this->objectToStore;
	}
}
?>