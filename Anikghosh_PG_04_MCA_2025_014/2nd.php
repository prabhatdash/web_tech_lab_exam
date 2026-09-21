<?php

$products = array(
    "Laptop" => 50000,
    "Mouse" => 500,
    "Keyboard" => 1200,
    "Headphone" => 2500,
    "Pen Drive" => 800
);

$total = 0;

foreach ($products as $price) {
    $total += $price;
}

$discount = 0;

if ($total > 2000) {
    $discount = $total * 0.10;
}

$finalAmount = $total - $discount;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h2>Shopping Cart</h2>

<table border="1">
    <tr>
        <th>Product Name</th>
        <th>Price (Rs.)</th>
    </tr>

    <?php
    foreach ($products as $product => $price) {
        echo "<tr>";
        echo "<td>$product</td>";
        echo "<td>$price</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>

<?php
echo "Total Price: Rs. $total<br>";
echo "Discount: Rs. $discount<br>";
echo "Final Payable Amount: Rs. $finalAmount";
?>

</body>
</html>