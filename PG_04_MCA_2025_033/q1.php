
<?php
function calculateBill($quantity, $price)
{
	return $quantity * $price;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bill Calculator</title>
</head>
<body>
	<h1>Bill Calculator</h1>
	<form method="post">
		<label>Quantity:</label>
		<input type="number" name="quantity" required>
		<label>Price:</label>
		<input type="number" name="price" step="1" required>
		<button type="submit">Calculate Bill</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$total = calculateBill($quantity, $price);
		echo "<p>Total bill amount: $total</p>";
	}
	?>
</body>
</html>

