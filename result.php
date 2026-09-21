<!DOCTYPE html>
        <html>
            <head>
                <title>Number Result</title>
</head>
<body>
</h2>Result</h2>
<?php
    if (isset($_POST['number'])) {
    
    $number =$_POST['number'];
    if ($number>0){
        echo "This number is Positive.<br>";
    }elseif ($number<0){
        echo"This number is Negative.<br>";
    } else {
        echo "The Number is zero.<br>";
    }

    if($number %2==0){
        echo"This number is Even.";
    }else{
        echo"This number is odd.";
    }
    }
    ?>
</body>
</html>