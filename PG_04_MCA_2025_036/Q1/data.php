<?php

function calculateBill($quantity, $price)
{
    return $quantity * $price;
}

$quantity = $_POST["quantity"];
$price = $_POST["price"];

$total = calculateBill($quantity, $price);

echo "Total Bill = " . $total;
?>