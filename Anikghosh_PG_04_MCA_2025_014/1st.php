<?php
$numbers = array(12, 45, 7, 89, 23, 56, 34, 90, 11, 67);


echo "Numbers in the array: <br>";
foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br><br>";


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

    $sum += $num;
}


$average = $sum / count($numbers);

echo "Largest Number: " . $largest . "<br>";
echo "Smallest Number: " . $smallest . "<br>";
echo "Sum of Numbers: " . $sum . "<br>";
echo "Average of Numbers: " . $average;
?>