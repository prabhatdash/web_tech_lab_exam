<!DOCTYPE html>
<html>
<head>
    <title>Food Billing System</title>
</head>
<body>
<h2>Sukhamay's Food Billing System</h2>
<form method="post">
    Select Item:
    <select name="item" required>
        <option value="Burger">Burger - Rs. 120</option>
        <option value="Pizza">Pizza - Rs. 250</option>
        <option value="Pasta">Pasta - Rs. 180</option>
        <option value="Sandwich">Sandwich - Rs. 100</option>
    </select>
    <br><br>
    Quantity:
    <input type="number" name="quantity" min="1" required>
    <br><br>
    <input type="submit" name="calculate" value="Calculate Bill">
</form>

<?php
function calculateBill($price, $quantity)
{
    return $price * $quantity;
}
if (isset($_POST['calculate'])) {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $prices = array(
        "Burger" => 120,
        "Pizza" => 250,
        "Pasta" => 180,
        "Sandwich" => 100
    );
    $price = $prices[$item];
    $total = calculateBill($price, $quantity);
    $gst = $total * 5 / 100;
    $finalAmount = $total + $gst;
    echo "<h3>Bill Details</h3>";
    echo "Selected Item: " . $item . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Price: Rs. " . $price . "<br>";
    echo "Total Amount: Rs. " . $total . "<br>";
    echo "5% GST: Rs. " . $gst . "<br>";
    echo "Final Payable Amount: Rs. " . $finalAmount . "<br>";
}
?>
</body>
</html>