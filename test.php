<?php

$start = microtime(true);

$response = file_get_contents('http://sleep-tcp');

echo sprintf("Response is: %s\n", $response);

$usage = getrusage();

$userUsage = $usage['ru_utime.tv_usec'] / 1000;
$systemUsage = $usage['ru_stime.tv_usec'] / 1000;
$memoryUsage = memory_get_usage() / 1024 / 1024;
$memoryRealUsage = memory_get_usage(true) / 1024 / 1024;
$totalTime = microtime(true) - $start;

echo sprintf(
    "User cpu: %.3fms, system cpu: %.3fms, memory: %.2fMB, memory real usage: %.2fMB, total time: %.3fs\n",
    $userUsage,
    $systemUsage,
    $memoryUsage,
    $memoryRealUsage,
    $totalTime
);
