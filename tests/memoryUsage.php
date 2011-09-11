<?php

require_once('../src/fifoQueue.php');

$queue = new fifoQueue();

$i = 0;

$first = memory_get_usage();
echo $first . "\n";

while($i < 1000)
{
	$queue->addItem($i);
	$i++;
}

$second = memory_get_usage();

echo $second . "\n";

$i = 0;

while($i < 1000)
{
	$queue->getItem();
	$i++;
}

$third = memory_get_usage();
echo $third . "\n";

?>