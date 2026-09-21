<?php
?>

<form action="data.php" method="post">
    Quantity:
    <input type="number" name="quantity" required>
    <br><br>

    Price:
    <input type="number" name="price" step="0.01" required>
    <br><br>

    <input type="submit" value="Calculate Bill">
</form>