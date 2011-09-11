<?php

require_once('../src/fifoQueue.php');

$queue = new fifoQueue();

$queue->addItem("1");
$queue->addItem("2");

echo $queue->getItem() . "\n";

$queue->addItem("3");

echo $queue->getItem() . "\n";
echo $queue->getItem() . "\n";

?>