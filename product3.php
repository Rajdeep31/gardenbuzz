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

$value1 = $_GET['value'];
$value2 = $_GET['value1'];
echo $value2;

// $query = "SELECT * FROM `products` where Categories = '$product_id' ";

if($value1 == 'ASC')
{
$query = "SELECT * FROM products ORDER BY `products`.`price` ASC where Categories = '$value2'  ";
}
else if($value1 == 'DESC'){
    $query = "SELECT * FROM products ORDER BY `products`.`price` DESC  where Categories = '$value2' ";
}
else if($value1 == 'Name'){
    $query = "SELECT * FROM products ORDER BY `products`.`title`  where Categories = '$value2' ";

}
else if($value1 == 'Quantity'){
    $query = "SELECT * FROM products ORDER BY `products`.`qty` DESC  where Categories = '$value2' ";
}
else{
    $query = "SELECT * FROM products where Categories = '$value2'";
}
$result = mysqli_query($con, $query);

$sum = 0;

while ($row = mysqli_fetch_array($result)) {
    $sum++;
} 

?>

<html>
    <head>
        <style>
            .single_product_item {
    background-color: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 20px;
}

.product_image img {
    /* width: 80%;
    height: 60%;
    display: block; */
    border:1px solid black;
    display:inline-block;
    width: 280px;
    height:200px;
    overflow:hidden;

}

.product_info {
    padding: 15px;
}

.product_title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    text-decoration: none;
    display: block;
    margin-bottom: 10px;
}

.product_price {
    font-size: 16px;
    color: #f56a6a;
    margin-bottom: 10px;
}

.product_actions {
    padding: 15px;
    background-color: #f9f9f9;
}

.add_to_cart_btn, .added_to_cart_btn {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 4px;
    text-transform: uppercase;
    display: inline-block;
}

.added_to_cart_btn {
    background-color: #ccc;
    cursor: not-allowed;
}

        </style>
</head>

<!-- <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>All Products</h2>
                        <p>Home <span>-</span> Buy Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                        <ul class="list">
                                <li>
                                    <a href="product.php?Categories=Indoor Plants">Indoor Plants</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Monsoon Plants">Monsoon Plants</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Oxygen Plants">Oxygen Plants</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Cactus and Succulents">Cactus and Succulents</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Bonsai Plants">Bonsai Plants</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Lucky Bamboos">Lucky Bamboos</a>
                                    <span>(6)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Flower Plant">Flower Plant</a>
                                    <span>(6)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Fertilizer">Fertilizer</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Seeds">Seeds</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Planters">Planters</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Gardening Tools">Gardening Tools</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Miniature Garden Toys">Miniature Garden Toys</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Pebbles">Pebbles</a>
                                    <span>(3)</span>
                                </li>
                                <li>
                                    <a href="product.php?Categories=Gifts">Gifts</a>
                                    <span>(3)</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="left_widgets p_filter_widgets price_rangs_aside">
                        <div class="l_w_title">
                            <h3>Price Filter</h3>
                            <br>
                            <br>
                        </div>

                        <div class="widgets_inner">
                            <div class="range_item">
                                
                                <div class="d-flex">
                                    <a href="product2.php?value=ASC">
                                        <input type="checkbox" /> Low to High
                                    </a>
                                </div>
                                <div class="d-flex">
                                    <a href="product2.php?value=DESC">
                                        <input type="checkbox" /> High to Low
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu">
                                <p><span><?php echo $sum ?> </span> Product Found</p>
                            </div>
                            <div class="single_product_menu d-flex">
                                <h5 >sort by :</h5>
                                <div style="margin-left: 20px;"><h5><a href="product2.php?value=Name">Name</a></h5></div>
                                <div style="margin-left: 20px;"><h5><a href="product2.php?value=Quantity">Quantity</a></h5></div>
                                <!-- <select>
                                    <option ><a href="product2.php?value=name">name</a></option>
                                    <option value="2"><a href="product2.php?value=price">price</a></option>
                                    <option value="3"><a href="product2.php?value=product">product</a></option>
                                </select> -->
                            </div>
                            <div class="single_product_menu d-flex">
                                <h5>show :</h5>
                                <div class="top_pageniation">
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single_product_menu d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search" aria-describedby="inputGroupPrepend" />
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center latest_product_inner">

                <?php
                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                <div class="col-lg-4 col-sm-6" >
                                    <div class="single_product_item">
                                        <div class="product_image">
                                            <img width="200px" src="img/product/'.$row['image'].'" alt="djwij" />
                                        </div>
                                            <div class="product_info">
                                                <a href="singleproduct.php?id='.$row['id'].'" class="product_title"><h4>'. $row['title'] .'</h4> </a>
                                                <h3 class="product_price">Rs. '. $row['price'] .'</h3>
                                            </div>
                                            <div class="product_actions">';
                                                // echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="add_cart">+ add to cart<i class="ti-heart"></i></a>';
                                                if(!check_if_added_to_cart($row['id'])){
                                                echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="add_cart"> Add to cart</a>';
                                                } else {
                                                    echo '<a href="#" class="add_cart" disabled> Add to cart</a>';
                                                }
                                           
                                      echo ' </div>
                                    </div>
                                </div>
                           ';
                        }
                ?>
                    <!-- <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">6</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<?php require './includes/footer.php' ?>

<script src="js/jquery-1.12.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.js"></script>

<script src="js/swiper.min.js"></script>

<script src="js/masonry.pkgd.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>

<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="js/price_rangs.js"></script>

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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac04f8bd3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>