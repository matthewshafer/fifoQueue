<?php

require_once('../src/fifoQueue.php');

$queue = new fifoQueue();

try
{
	$queue->getItem();
}
catch(Exception $e)
{
	echo "caught exception\n";
}

?>