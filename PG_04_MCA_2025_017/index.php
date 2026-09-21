<?php

$numbers = array(12, 45, 7, 23, 89, 34, 56, 10, 67, 31);

echo "Numbers: ";

foreach ($numbers as $num) {
    echo $num . " ";
}

$largest = $numbers[0];
$smallest = $numbers[0];
$sum = 0;

foreach ($numbers as $num) {

    if ($num > $largest) {
        $largest = $num;
    }

    if ($num < $smallest) {
        $smallest = $num;
    }

    $sum = $sum + $num;
}

$average = $sum / count($numbers);

echo "<br>";
echo "Largest number: " . $largest;
echo "<br>";
echo "Smallest number: " . $smallest;
echo "<br>";
echo "Sum: " . $sum;
echo "<br>";
echo "Average: " . $average;

?>
