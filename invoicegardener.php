<?php 
    session_start();
    // // require "./includes/head.php" ; 
    require 'includes/conn.php';


    if(!isset($_SESSION['email'])){
    //  echo "<script> location.href='/ecommerce'; </script>";
    echo "<script>alert('Login Require');document.location='login.php';</script>";
    exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invoice</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f7f7f7;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f0f0f0;
        text-align: left;
    }

    .total {
        font-weight: bold;
        text-align: right;
    }

    .footer {
        text-align: center;
        margin-top: 50px;
    }

</style>
</head>
<body>

<?php

        $sum = 0;
        $quantity = 0;
        $user_id = $_SESSION['user_id'];
        $query = 'SELECT gardener.price, gardener.id, gardener.last_name, gardener.first_name, gardener.image, cart.qty from cart, gardener where gardener.id = cart.product_id and cart.user_id="' . $user_id . '"';

        $result = mysqli_query($con, $query);


        $query1 = 'SELECT * from users where id="' . $user_id . '"';
        $result1 = mysqli_query($con, $query1);

    // $query1 = 'SELECT * from orders,cart where id=101 and orders.product_id = cart.product_id ';
    // $result1 = mysqli_query($con, $query1);
    // $username = $row['last_name'];
    // echo $username;


    $deletefromcart = "DELETE FROM CART WHERE cart.user_id='$user_id'";
    $deleted = mysqli_query($con, $deletefromcart);

?>

<div class="container">
    <h1>Invoice</h1>
    <div class="user-details">
    <?php
            while ($row = mysqli_fetch_array($result1)) {
                echo '<p><strong>Customer Name:</strong> ' . $row['first_name'] . ' ' . $row['last_name'] . ' </p>
                <p><strong>Mobile:</strong> ' . $row['mobile'] . '</p>
                <p><strong>Email:</strong> ' . $row['email'] . '</p>';
        
            }
        ?>
    </div>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>

                    <?php

                        while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo 
                        '
                          <td>
                            <a href="#">
                            ' . $row['first_name'] . ' ' . $row['last_name'] . '
                            <span class="middle">x ' . $row['qty'] . '</span>
                            <span class="last">Rs. ' . $row['qty'] * $row['price'] . '</span>
                            </a>
                          </td>
                        ';
                        echo '<tr>';

                        $sum = $sum + $row['qty'] * $row['price'];
                        $quantity = $quantity + $row['qty'];
                        }
                    ?>
              
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="total">Subtotal</td>
                <td>Rs.<?php echo $sum ?></td>
            </tr>
            <tr>
                <td colspan="3" class="total">Shipping(Rs. 49/product)</td>
                <td>Rs. <?php echo $quantity*49?></td>
            </tr>
            <tr>
                <td colspan="3" class="total">Total</td>
                <td>Rs. <?php echo $sum + 49*$quantity ?></td>
            </tr>

        </tfoot>
    </table>
    <div class="company-details">
        <p><strong>Company Name:</strong> Garden Buzz</p>
        <p><strong>Address:</strong> 456 Square Plazza St, Gurgaon, Haryana</p>
        <p><strong>Email:</strong> gardenbuzz@gmail.com</p>
    </div>
</div>
<div class="footer">
    <p>Thank you for your purchase!</p>
    <a href="index.php"><h6>Back To Home Screen!</h6></a>
</div>

</body>
</html>
