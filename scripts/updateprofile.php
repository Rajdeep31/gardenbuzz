<?php
require "../includes/conn.php";
session_start();
// if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_SESSION['email'])) {
    $user_id = $_SESSION['user_id'];
    // $admin_id = $_SESSION['admin_id'];


    $Experties=$_POST['Experties'];
    $Experties=mysqli_real_escape_string($con,$Experties);

    $updatetext=$_POST['updatetext'];
    $updatetext=mysqli_real_escape_string($con,$updatetext);

    echo $Experties;
    echo $updatetext;
    echo $user_id;

    // $query = "UPDATE users SET 'first_name' = '$updatetext' where id='$user_id'";
    $sql = "UPDATE users SET $Experties = '$updatetext' where id='$user_id';";
    $res = mysqli_query($con, $sql);
    if($res){
        echo 'done';
    }
    else{
        echo 'donee';
    }

    header("location: ../profile.php");
// }
?>

