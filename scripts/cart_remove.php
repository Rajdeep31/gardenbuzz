<?php
require("../includes/conn.php");
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['qty']) && is_numeric($_GET['qty'])) {
    $item_id = $_GET['id'];
    $qty = $_GET['qty'];
    $user_id = $_SESSION['user_id'];
    $query = "DELETE from `cart` where product_id='$item_id' and user_id='$user_id'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "<script>alert('Product Sucessfully Removed');document.location='../cart.php#cart';</script>";
    // header('location: ../cart.php#cart');
}
?>