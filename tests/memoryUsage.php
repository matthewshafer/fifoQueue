<?php

require_once('../src/fifoQueue.php');

$queue = new fifoQueue();

$i = 0;

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;

$first = memory_get_usage();
echo $first . "\n";

while($i < 1000)
{
	$queue->addItem($i);
	$i++;
}

$second = memory_get_usage();

echo $second . "\n";

echo $second - $first . "\n";

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo $totaltime." seconds\n";

$i = 0;

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;

while($i < 1000)
{
	$queue->getItem();
	$i++;
}

$third = memory_get_usage();
echo $third . "\n";

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo $totaltime." seconds\n";

$queue = null;

$queue = new SplQueue();

$i = 0;

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;

$first = memory_get_usage();

while($i < 1000)
{
	$queue->enqueue($i);
	$i++;
}

$second = memory_get_usage();

echo $second . "\n";

echo $second - $first . "\n";

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo $totaltime." seconds\n";

$i = 0;

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;

while($i < 1000)
{
	$queue->dequeue();
	$i++;
}

$third = memory_get_usage();
echo $third . "\n";

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo $totaltime." seconds\n";


$queue = null;

$queue = array();

$i = 0;

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;

$first = memory_get_usage();

while($i < 1000)
{
	$queu[] = $i;
	$i++;
}

$second = memory_get_usage();

echo $second . "\n";

echo $second - $first . "\n";

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo $totaltime." seconds\n";

$i = 0;

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime;


while($i < 1000)
{
	array_shift($queue);
	$i++;
}

$third = memory_get_usage();
echo $third . "\n";

$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$endtime = $mtime; 
$totaltime = ($endtime - $starttime); 
echo $totaltime." seconds\n";



?>