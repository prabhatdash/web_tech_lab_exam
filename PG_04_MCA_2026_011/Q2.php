<!DOCTYPE html>
<html>
<body>
    <h2>Shopping Cart</h2>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Price (Rs.)</th>
        </tr>
        
        <?php
        
        $cart = [
            "Shoes" => 1500, 
            "Jeans" => 1200, 
            "Shirt" => 500
        ];
        
        $total = 0;
        
        foreach ($cart as $item => $price) 
        {
            echo "<tr><td>$item</td><td>$price</td></tr>";
            $total += $price; 
        }
        ?>
    </table>

    <?php
    $discount = 0;
    if ($total > 2000) 
    {
        $discount = $total * 0.10;
    }
    
    $finalAmount = $total - $discount;

    echo "<p><b>Total Price:</b> Rs. $total</p>";
    echo "<p><b>Discount:</b> Rs. $discount</p>";
    echo "<p><b>Final Payable Amount:</b> Rs. $finalAmount</p>";
    ?>
</body>
</html>