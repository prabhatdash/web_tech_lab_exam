<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

for($i=0; $i < 10; $i++){
    echo $arr[$i] . " ";
}

echo "\n";

$largest_num = $arr[0];

for($i=0; $i < 10; $i++){
    if($arr[$i] > $largest_num){
        $largest_num = $arr[$i];
    }
}

echo "Largest num is: " . $largest_num;
echo "\n";

$smalledt_num = $arr[0];

for($i=0; $i < 10; $i++){
    if($arr[$i] < $smalledt_num){
        $smalledt_num = $arr[$i];
    }
}

echo "Smallest num is: " . $smalledt_num;
echo "\n";

$sum = 0;
$avg = 0;

for($i=0; $i < 10; $i++){
    $sum += $arr[$i];
}
$avg = $sum / 10;

echo "Sum is: " . $sum . "\n";
echo "Agerage is: " . $avg;




?>