<?php

$products = array(
    "T-Shirt" => 800,
    "Jeans" => 1200,
    "Shoes" => 1500,
    "Cap" => 300
);

$total = 0;

echo "<h2>Shopping Cart</h2>";

echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Product</th>";
echo "<th>Price (Rs.)</th>";
echo "</tr>";

foreach ($products as $product => $price) {
    echo "<tr>";
    echo "<td>$product</td>";
    echo "<td>$price</td>";
    echo "</tr>";

    $total = $total + $price;
}

echo "</table>";

echo "<p><b>Total Price:</b> Rs. $total</p>";

if ($total > 2000) {
    $discount = $total * 0.10;
} else {
    $discount = 0;
}

$finalAmount = $total - $discount;

echo "<p><b>Discount:</b> Rs. $discount</p>";
echo "<p><b>Final Payable Amount:</b> Rs. $finalAmount</p>";

?>


