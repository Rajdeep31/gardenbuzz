<?php
require 'includes/conn.php';
require 'includes/is_added_to_cart.php';
session_start();
require "./includes/head.php";

 if(!isset($_SESSION['email'])){
    //  echo "<script> location.href='/ecommerce'; </script>";
    echo "<script>alert('Login Require');document.location='login.php';</script>";
    exit();
 }
?>

<?php

$product_id = $_GET['id'];
//echo $product_id;


$query = "SELECT * FROM `products` where id = '$product_id' ";
// user_id='$user_id'
// where Categories = 'Trailing Indoor Plants'

$result = mysqli_query($con, $query);

$sum = 0;

while ($row = mysqli_fetch_array($result)) {
    $sum++;
} 

?>


<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Products</h2>
                        <p>Home <span>-</span> Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="product_image_area section_padding">

<?php  
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {        
      echo '<div class="container">
        <div class="row s_product_inner justify-content-between">
            <div class="col-lg-7 col-xl-7">
                <div class="product_slider_img">
                    <div id="vertical">
                        <div data-thumb="img/product/'.$row['image'].'">
                            <img width="1000px" height="500px" src="img/product/'.$row['image'].'" alt="djwij" />
                        </div>
                        <div data-thumb="img/product/'.$row['image2'].'">
                            <img width="1000px" height="500px" src="img/product/'.$row['image2'].'" alt="djwij" />
                        </div>
                        <div data-thumb="img/product/'.$row['image3'].'">
                            <img width="1000px" height="500px" src="img/product/'.$row['image3'].'" alt="djwij" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="s_product_text">
                    <h5>previous <span>|</span> next</h5>
                    <h3>'. $row['title'] .'</</h3>
                    <h2>Rs. '. $row['price'] .'</h2>
                    <ul class="list">
                        <li>
                            <a class="active" href="#">
                                <span>Category</span> : '. $row['Categories'] .'</a>
                        </li>
                        <li>
                            <a href="#"> <span>Availibility</span> : '. $row['qty'] .'</a>
                        </li>
                    </ul>
                    <p>
                    Plants are a kingdom of life forms that includes familiar organisms such as trees, herbs, bushes, grasses, vines, ferns and mosses. 
                    </p>
                    <p>
                    Through photosynthesis, they convert water and carbon dioxide into the oxygen we breathe and the sugars that provide the primary fuel for life.
                    </p>
                    <div class="card_area d-flex justify-content-between align-items-center">
                        <div class="product_count">
                            <span class="inumber-decrement">
                                <i class="ti-minus"></i></span>
                            <input class="input-number" type="text" value="1" min="0" max="10" />
                            <span class="number-increment"> <i class="ti-plus"></i></span>
                        </div>';
                        if(!check_if_added_to_cart($row['id'])){
                            echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="btn_3">+ add to cart</i></a>';
                         } else {
                             echo '<a href="#" class="btn_3" disabled>+ add to cart</i></a>';
                         }
        
                    echo '</div>
                </div>
            </div>
        </div>
      </div>';
    }
    ?>
</div>

<section class="product_description_area">
<?php  
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {  
    echo '<div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Plant Care</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    <img width="2000px" height="1000px" src="img/product/'.$row['desc1'].'" alt="djwij" />
                </p>
                
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>
                    <img width="2500px" height="1000px" src="img/product/'.$row['desc2'].'" alt="djwij" />
                </p>
            </div>
        </div>
    </div>';
    }
?>
</section>

<!-- <section class="product_list best_seller">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <img src="img/product/04_Fproductss_1.webp" alt="" />
                        <div class="single_product_text">
                            <a href="category.php"><h4>Miniature Rose, Button Rose (Any Color) - Plant</h4></a>
                            <h3>Rs.599</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/08_Gifiproductss_1.jpg" alt="" />
                        <div class="single_product_text">
                            <a href="category.php"><h4>Romantic Plants Garden</h4></a>
                            <h3>Rs.399</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/03_Miniproductss_1.jpg" alt="" />
                        <div class="single_product_text">
                            <a href="category.php"><h4>Butterflies plastic miniature garden toys - 5 Pieces</h4></a>
                            <h3>Rs.330</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/010_Bonproductss_1.jpg" alt="" />
                        <div class="single_product_text">
                            <a href="category.php"><h4>Boxwood Bonsai - Plant</h4></a>
                            <h3>Rs.1099</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/01_plantersproductss_1.jpg" alt="" />
                        <div class="single_product_text">
                            <a href="category.php"><h4>5.1 inch (13 cm) Vertical Garden Square Plastic Pots With Frame (Black) (set of 3) </h4></a>
                            <h3>Rs.799</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php require './includes/footer.php' ?>

<script src="js/jquery-1.12.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.js"></script>

<script src="js/lightslider.min.js"></script>

<script src="js/masonry.pkgd.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>

<script src="js/slick.min.js"></script>
<script src="js/swiper.jquery.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>

<script src="js/theme.js"></script>
<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac083e913390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>