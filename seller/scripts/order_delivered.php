<?php
require "../includes/conn.php";
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_SESSION['seller_id'])) {
    $item_id = $_GET["id"];
    $seller_id = $_SESSION['seller_id'];

    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "UPDATE ORDERS SET status='Delivered' where id='$item_id'";
    $res = mysqli_query($conn, $query);
    header("location: ../order.php");
}
?>
