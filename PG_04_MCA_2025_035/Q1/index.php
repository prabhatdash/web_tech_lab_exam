<?php
?>
<form action="data.php" method="post">
    quantity:
    <input type="number" name="quantity" required><br><br>
    price:
    <input type="number" name="price" step="0.01" required><br><br>
    <input type="submit" value="Calculate Bill">
</form>