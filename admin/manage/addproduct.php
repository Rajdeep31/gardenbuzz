<?php
$c=mysqli_connect("localhost","root","","plantShop");

if($c){
    echo "Connected";
} 
else{
    echo "Not Connected";
}
 ?>

 <?php

    $title = $specs = $mrp = $price = $color = $storage = $image = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        // $desc = $_POST['desc'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];
        $desc1 = $_POST['desc1'];
        $desc2 = $_POST['desc2'];
    }

    session_start();
    $seller_id = $_SESSION['admin_id'];
    echo $seller_id;


    echo $title;
    echo $price;
    echo $qty;
    // echo $desc;
    $desc = "hello";
    echo $image;
    echo $category;
    echo $image2;
    echo $image3;
    echo $desc1;
    echo $desc2;


    // $query = "INSERT INTO `products` (`title`, `price`,`qty`,`desc`,`image`,`Categories`)
    // VALUES ('$title', '$price','$qty','$desc','$image','$category')";
    // ,`image2`,`image3`,`desc1`,`desc2`)
    // ,'$image2','$image3','$desc1','$desc2'
    
    $query = "INSERT INTO `products` (`title`, `price`,`qty`,`desc`,`image`,`Categories`,`seller_id`,`image2`,`image3`,`desc1`,`desc2`)
    VALUES ('$title', '$price','$qty','$desc','$image','$category','$seller_id','$image2','$image3','$desc1','$desc2')";


    if(mysqli_query($c, $query)){
        echo "inserted";
        header("Location: ../products.php");
    }
?>

