<?php
session_start();
require './includes/conn.php';
require "./includes/head.php";

if (!isset($_SESSION['email'])) {
        //  echo "<script> location.href='/ecommerce'; </script>";
        echo "<script>alert('Login Require');document.location='login.php';</script>";

    exit();
}
?>


<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Cart Products</h2>
                        <p>Home <span>-</span>Cart Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = 'SELECT products.price, products.id, products.title, products.image, cart.qty from cart, products where products.id = cart.product_id and cart.user_id="' . $user_id.'"';

$result = mysqli_query($con, $query);
?>

<?php
$user_id = $_SESSION['user_id'];
$querys = 'SELECT gardener.price, gardener.id, gardener.first_name, gardener.last_name, gardener.image, cart.qty from cart, gardener where gardener.id = cart.product_id and cart.user_id="' . $user_id.'"';

$results = mysqli_query($con, $querys);

?>


<section id="cart" class="cart_area padding_top">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            while($row = mysqli_fetch_array($result)){
                            echo
                                '<tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img width="100px" src="img/product/'.$row['image'].'" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <p>'.$row['title'].'</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rs. '.$row['price'].'</h5>
                                    </td>
                                    <td>
                                        <div class="product_count d-flex align-items-center">
                                            <h5>'.$row['qty'].' </h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="scripts/cart_remove.php?id='.$row['id'].'&qty=1" ><button type="button" class="btn btn-outline-danger">&#10005;</button></a>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rs. '.$row['qty']*$row['price'].'</h5>
                                    </td>
                                </tr>';
                                $sum = $sum + $row['qty']*$row['price'];
                            }
                        ?>
                        <?php

                            while($row = mysqli_fetch_array($results)){
                            echo
                                '<tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img width="100px" src="img/product/'.$row['image'].'" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <p>'.$row['first_name'].' '.$row['last_name'].'</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rs. '.$row['price'].'</h5>
                                    </td>
                                    <td>
                                        <div class="product_count d-flex align-items-center">
                                            <h5>'.$row['qty'].' </h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="scripts/cart_remove.php?id='.$row['id'].'&qty=1" ><button type="button" class="btn btn-outline-danger">&#10005;</button></a>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rs. '.$row['qty']*$row['price'].'</h5>
                                    </td>
                                </tr>';
                                $sum = $sum + $row['qty']*$row['price'];
                            }
                        ?>
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>Rs. <?php echo $sum ?></h5>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="/ecommerce">Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac216d593390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>