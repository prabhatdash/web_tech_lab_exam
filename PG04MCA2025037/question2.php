<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Billing System</title>
</head>
<body>

<h1>Restaurant Food Billing System</h1>

<form method="post" action="backend2.php">

    <label>Select Item:</label>

    <select name="item" required>
        <option value="Burger">Burger : Rs. 120</option>
        <option value="Pizza">Pizza : Rs. 250</option>
        <option value="Pasta">Pasta : Rs. 180</option>
        <option value="Sandwich">Sandwich : Rs. 100</option>
    </select>

    <br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity" min="1" required>

    <br><br>

    <input type="submit" name="calculate" value="Calculate Bill">

</form>
</body>
</html>
