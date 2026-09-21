<?php
$numbers=[12,45,7,89,23,56,91,3,18,67];
foreach($numbers as $num){
    echo $num."<br>";
}
$largest=max($numbers);
$smallest=min($numbers);
$sum=array_sum($numbers);
$avg=$sum/count($numbers);
echo"largest:$largest<br>";
echo "smallest: $smallest<br>";
echo"sum:$sum<br>";
echo "avg:$avg<br>";
?>