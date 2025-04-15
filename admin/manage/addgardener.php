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
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $image = $_POST['image'];
        $Age = $_POST['Age']; 
        $Number = $_POST['Number'];
        $category = $_POST['email'];
        $experi_year = $_POST['experi_year'];
        $Experties = $_POST['Experties'];
        $location = $_POST['location'];
        $price = $_POST['price'];
    }

    session_start();
    $seller_id = $_SESSION['admin_id'];             
    echo $experties;


    // echo $first_name = 'hello';
    // echo $last_name = 'hello';
    // echo $image = '33';
    // echo $Age = '33';
    // echo $Number = '33';
    // echo $email = 'hello';
    // echo $experi_year = '33';
    // echo $location = 'hello';
    // echo $price = '33';


    // $query = "INSERT INTO `products` (`title`, `price`,`qty`,`desc`,`image`,`Categories`)
    // VALUES ('$title', '$price','$qty','$desc','$image','$category')";
    // ,`image2`,`image3`,`desc1`,`desc2`)
    // ,'$image2','$image3','$desc1','$desc2'
    
    // $query = "INSERT INTO `products` (`first_name`, `last_name`,`image`,`age`,`mobile`,`email`,`experi_year`,`location`,`price`)
    // VALUES ('$first_name', '$last_name','$image','$Age','$Number','$email','$experi_year','$location','$price')";
    
    $query = "INSERT INTO `gardener` (`id`, `first_name`, `last_name`, `image`, `age`, `mobile`, `email`, `experi_year`, `location`, `price`,`Experties`) 
    VALUES (NULL, '$first_name', '$last_name', '$image', '$Age', '$Number', '$category', '$experi_year', '$location', '$price','$Experties')";


    if(mysqli_query($c, $query)){
        echo "inserted";
        header("Location: ../gardeners.php");
    }
?>

