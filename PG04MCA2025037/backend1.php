<?php

function calculateBill($quantity, $price)
{
    return $quantity * $price;
}

if (isset($_POST['calculate'])) {

    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $total = calculateBill($quantity, $price);

    echo "<h2>Total Bill = Rs. $total</h2>";
}

?>