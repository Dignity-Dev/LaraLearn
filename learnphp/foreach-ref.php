<?php

$largeArray = range(1, 1_000_000);

$startTime = microtime(true);
$StartMem = memory_get_usage();

$out = [];
foreach ($largeArray as $value) {
    $out[] = $value * 2;
}

$endTime = microtime(true);
$endMem = memory_get_usage();

$executionTime = $endTime - $startTime;
$memoryUsed = $endMem - $StartMem;
echo "Execution time: " . $executionTime . " seconds\n";
echo "Memory used: " . round($memoryUsed / 1024 / 1024) . " MBs\n";
