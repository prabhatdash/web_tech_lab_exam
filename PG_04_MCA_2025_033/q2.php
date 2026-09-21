<?php
$menu = [
	"Burger" => 120,
	"Pizza" => 250,
	"Pasta" => 180,
	"Sandwich" => 100
];
function calculateBill($price, $quantity)
{
	return $price * $quantity;
}
?>

<form method="post">
	<label>Select Item:</label>
	<select name="item">
        <option value="">Select item</option>
		<?php foreach ($menu as $itemname => $itemprice)
             { echo "<option value='$itemname'>$itemname - Rs. $itemprice </option>"; }
                ?>
		<?php 
         ?>
	</select>
	<br>
	<label>Quantity:</label>
	<input type="number" name="quantity" min="1" required>
	<br>
	<input type="submit" value="Calculate Bill">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$item = $_POST["item"];
	$quantity = $_POST["quantity"];
	$price = $menu[$item];
	$total = calculateBill($price, $quantity);
	$gst = $total * 0.05;
	$finalAmount = $total + $gst;

	echo "<h3>Bill Details</h3>";
	echo "Selected item: $item<br>";
	echo "Quantity: $quantity<br>";
	echo "Price: Rs. $price<br>";
	echo "Total amount: Rs. $total<br>";
	echo "5% GST: Rs. $gst<br>";
	echo "Final payable amount: Rs. $finalAmount";
}
?>
