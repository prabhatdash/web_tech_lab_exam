<!DOCTYPE html>
<html>
<head>
    <title>Food Billing System</title>
</head>
<body>
<h2>Sukhamay's Restaurant</h2>
<form method="post">
    Quantity:
    <input type="number" name="quantity" required>
    <br><br>
    Price:
    <input type="number" name="price" required>
    <br><br>
    <input type="submit" name="calculate" value="Calculate Bill">
</form>

<?php
function calculateBill($quantity, $price)
{
    $total = $quantity * $price;
    return $total;
}
if (isset($_POST['calculate'])) {
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = calculateBill($quantity, $price);
    echo "<h3>Total Bill = Rs. " . $total . "</h3>";
}
?>
</body>
</html>