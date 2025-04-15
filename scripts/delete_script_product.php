<?php
require "../includes/conn.php";
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"];
    $admin_id = $_SESSION['user_id'];

    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM products WHERE id='$item_id' ";
    $res = mysqli_query($con, $query);
    echo "<script>alert('Product Sucessfully');document.location='../products';</script>";
    // header("location: ../products.php");
}
?>
