
<?php


$items = [
    ["name" => "apple", "price" => 1000, "quantity" => 5],
    ["name" => "banana", "price" => 1100, "quantity" => 3],
    ["name" => "orange", "price" => 1400, "quantity" => 2],
    ["name" => "milk", "price" => 2000, "quantity" => 1],
    ["name" => "bread", "price" => 1500, "quantity" => 2],
    ["name" => "egg", "price" => 900, "quantity" => 1],
    ["name" => "cake", "price" => 1700, "quantity" => 1],
    ["name" => "juice", "price" => 500, "quantity" => 1],
    ["name" => "coke", "price" => 200, "quantity" => 2],
    ["name" => "sugar", "price" => 2000, "quantity" => 1],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Total Price</th>
            <th>Price after discount</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price'] * $item['quantity']; ?></td>
                <td>
                    <?php 
                        $total_price = $item['price']*$item['quantity'];
                        if($total_price > 2000){
                            echo $total_price - ($total_price*0.1);
                        } else {
                            echo $total_price;
                        }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2">Total price after discount: </td>
            <td>
                <?php 
                $total_price_discount = 0;
                    foreach($items as $item){
                        $total_price = $item['price']*$item['quantity'];
                        if($total_price > 2000){
                            $total_price_discount += $total_price - ($total_price*0.1);

                        }
                        else {
                            $total_price_discount += $total_price;
                        }
                    }
                    echo $total_price_discount;
                ?>
            </td>
        </tr>
    </table>
</body>
</html>