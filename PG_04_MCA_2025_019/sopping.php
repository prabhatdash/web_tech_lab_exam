<?php
$products=[
    "laptop"=>55000,
    "mouse"=>500,
    "keyboard"=>1500,
    "headphones"=>2000,
    "usb drive"=>800
];
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>product</th><th>price (RS.)</th></tr>";
$total =0;
foreach ($products as $name => $price){
    echo"<tr><td>$name</td><td>$price</td></tr>";
    $total += $price;
}
echo "</table>";
echo "total price: RS. $total<br>";
if($total >2000){
    $discount=$total * 0.10;
}else{
    $discount=0;
}
$final=$total - $discount;
echo "discount: RS. $discount<br>";
echo "final payble amount : RS. $final<br>";
?>