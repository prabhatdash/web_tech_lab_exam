<?php
function bill($price, $quantity)
{
    return $price * $quantity;
}
$prices = [
    "burgers" => 120,
    "pizzas" => 250,
    "pastas" => 180,
    "sandwiches" => 100
];
$total = 0;
foreach ($_POST["items"] as $item) {
    $quantity = $_POST["quantity"][$item];
    $price = $prices[$item];
    $amount = bill($price, $quantity);
    $total = $total + $amount;
    echo "Item: " . $item . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Price: Rs. " . $price . "<br>";
    echo "Amount: Rs. " . $amount . "<br><br>";
}
$gst = $total * 0.05;
$final = $total + $gst;
echo "Total Amount: Rs. " . $total . "<br>";
echo "5% GST: Rs. " . $gst . "<br>";
echo "Final payable Amount: Rs. " . $final;
?>