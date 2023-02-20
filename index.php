<?php

$temp = array(32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6);

$avg= array_sum($temp) / count($temp);
echo "Jan Avg Temp " . round($avg, 2);
echo '<br>';
sort($temp);
$lowest = array_slice($temp, 0, 5);
echo "5 Lowest tempratures :" . implode(", ", $lowest);
echo '<br>';
$highest = array_slice($temp, -5);
echo "5 highest tempratures :" . implode(", ", $highest);
?>
