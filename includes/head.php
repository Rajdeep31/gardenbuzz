<?php require 'conn.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Garden Buzz</title>
    <link rel="icon" href="img/gardenbuzzlogo.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/lightslider.min.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/price_rangs.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif; /* Optional: Set a preferred font */

        }
        
        
        header {
            background-color: #ffffff;
            padding: 10px; /* Adjust the padding as needed */
            text-align: center;
            width: 100%; /* Ensure the header spans the entire width */
            border-bottom: 2px solid #000000;
            /* position: fixed; */
            background: linear-gradient(rgba(245, 245, 220, 0.8), rgba(245, 245, 220, 0.8)),url("vine.webp"),no-repeat center center/cover;
            position: sticky;
    top: 0;
    z-index: 1000; /* Ensure the header stays above other elements */
    /* Your other styles */

        }
        
        .gardenbuzzlogo{
            height: 10%;
            width: 10%;
        }
        
        


    </style>
</head>

<body>

    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <img src="img/gardenbuzzlogo.png" alt="logo" class="gardenbuzzlogo" />
                        <a class="navbar-brand" href="/">
                            <h2>GardenBuzz</h2>
                            <!-- <img src="img/logo.png" alt="logo" /> -->
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"><h4>Home</h4></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="category.php"><h4>Products</h4></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_3">
                                                <a class="dropdown-item" href="product.php?Categories=Indoor Plants">Indoor Plants</a>
                                                <!-- <ul class="dropdown-item"> -->
                                                    <!-- <li><a class="dropdown-item" href="product.php?Categories=Pebbles">Pebbles</a></li>
                                                    <li><a class="dropdown-item" href="product.php?Categories=Gifts">Gifts</a></li> -->
                                                <a class="dropdown-item" href="product.php?Categories=Monsoon Plants">Monsoon Plants</a>
                                                <a class="dropdown-item" href="product.php?Categories=Oxygen Plants">Oxygen Plants</a>
                                                <a class="dropdown-item" href="product.php?Categories=Cactus and Succulents">Cactus and Succulents</a>
                                                <a class="dropdown-item" href="product.php?Categories=Bonsai Plants">Bonsai Plants</a>
                                                <a class="dropdown-item" href="product.php?Categories=Lucky Bamboos">Lucky Bamboos</a>
                                                <a class="dropdown-item" href="product.php?Categories=Flower Plant">Flower Plant</a>
                                                <a class="dropdown-item" href="product.php?Categories=Fertilizer">Fertilizer</a>
                                                <a class="dropdown-item" href="product.php?Categories=Seeds">Seeds</a>
                                                <a class="dropdown-item" href="product.php?Categories=Planters">Planters</a>
                                                <a class="dropdown-item" href="product.php?Categories=Gardening Tools">Gardening Tools</a>
                                                <a class="dropdown-item" href="product.php?Categories=Miniature Garden Toys">Miniature Garden Toys</a>
                                                <a class="dropdown-item" href="product.php?Categories=Pebbles">Pebbles</a>
                                                <a class="dropdown-item" href="product.php?Categories=Gifts">Gifts</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gardener.php"><h4>Gardener</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php"><h4>Contact</h4></a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                                    <div class="dropdown-content">
                                      <a href="#">Link 1</a>
                                      <a href="#">Link 2</a>
                                      <a href="#">Link 3</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <?php
                                $mail = '';
                                if (isset($_SESSION['email'])){
                                    $mail = $_SESSION["email"];
                                }
                                $name= '';

                                $query = 'SELECT * FROM users';
                                $result = mysqli_query($con, $query);
                                while($row = mysqli_fetch_array($result)){
                                    if($row['email'] == $mail){
                                        $name = $row['first_name'] . " " . $row['last_name'];
                                    }
                                }

                            if (isset($_SESSION['email'])) {

                                echo '
                                    <div style="display: flex; align-items: center;">
                                
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                '.$name.'
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_3">
                                                <a class="dropdown-item" href="profile.php">My Profile</a>
                                                <a class="dropdown-item" href="allorders.php">My Orders</a>
                                                <a class="dropdown-item" href="tracking.php">tracking</a>
                                                <a class="dropdown-item" href="seller/login.php">Want to sell</a>
                                                <a class="dropdown-item" href="http://127.0.0.1:5000">Leaf Detection</a>
                                                <a class="dropdown-item" href="chatbot/index.php">24*7</a>
                                                <a class="dropdown-item" href="scripts/logout_script.php">Logout</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="cart.php" id="navbarDropdown3">
                                            <i class="fas fa-cart-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    ';
                            } else {
                                echo '<div class="nav-item">
                                        <a href="login.php"><button class="nav-link custom">Login</button></a>
                                    </div>';
                                echo '<div class="nav-item">
                                        <a href="register.php"><button class="nav-link custom">SignUp</button></a>
                                    </div>';
                            }

                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->
    </header>