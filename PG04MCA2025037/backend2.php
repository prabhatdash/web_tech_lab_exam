<?php

function calculateBill($quantity, $price)
{
    return $quantity * $price;
}

if (isset($_POST['calculate'])) {

    $item = $_POST['item'];
    $quantity = $_POST['quantity'];

    // Menu prices
    $menu = [
        "Burger" => 120,
        "Pizza" => 250,
        "Pasta" => 180,
        "Sandwich" => 100
    ];

    $price = $menu[$item];

    $total = calculateBill($quantity, $price);

    $gst = $total * 0.05;
    $finalAmount = $total + $gst;

    echo "<h2>Bill Details</h2>";

    echo "Selected Item: " . $item . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Price: Rs. " . $price . "<br>";
    echo "Total Amount: Rs. " . $total . "<br>";
    echo "5% GST: Rs. " . $gst . "<br>";
    echo "<strong>Final Payable Amount: Rs. " . $finalAmount . "</strong>";

}

?>