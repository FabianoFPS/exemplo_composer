<?php
require 'vendor/autoload.php';
use SebastianBergmann\Timer\Timer;
Timer::start();
$time = Timer::stop();
var_dump($time);
echo "<br>";
print Timer::secondsToTimeString($time);
echo "<br>";
print Timer::resourceUsage();
?>
