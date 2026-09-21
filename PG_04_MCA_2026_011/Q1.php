<?php

echo "Question 1";
$numbers = [40, 12, 70, 4, 89, 20, 56, 97, 34, 19];

$largest = $numbers[0];
$smallest = $numbers[0];
$sum = 0;
$count = 0;

echo "The numbers are: ";

foreach ($numbers as $num)
{
    echo $num . " ";

    if ($num > $largest)
    {
        $largest = $num;
    }

    if ($num < $smallest)
    {
        $smallest = $num;
    }

    $sum += $num;
    $count++;
}

echo "\n\n";

$average = $sum / $count;

echo "Largest number: " . $largest . "\n";
echo "Smallest number: " . $smallest . "\n";
echo "Sum: " . $sum . "\n";
echo "Average: " . $average . "\n";
?>