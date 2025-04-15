<?php
session_start();

require './includes/conn.php';
require "./includes/head.php";

if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['qty']) && is_numeric($_GET['qty'])) {
    $item_id = $_GET['id'];
    $qty = $_GET['qty'];
    $user_id = $_SESSION['user_id'];
    $queryy = "INSERT INTO `cart`(`product_id`, `user_id`, `qty`) VALUES ('$item_id','$user_id','$qty')";
    mysqli_query($con, $queryy) or die(mysqli_error($con));
}
?>

<?php
if(!isset($_SESSION['email'])){
         //  echo "<script> location.href='/ecommerce'; </script>";
         echo "<script>alert('Login Require');document.location='login.php';</script>";

    exit();
 }
?>

<?php
  $sum = 0;
  $quantity = 0;
  $user_id = $_SESSION['user_id'];
  $query = 'SELECT gardener.price, gardener.id, gardener.last_name, gardener.first_name, gardener.image, cart.qty from cart, gardener where gardener.id = cart.product_id and cart.user_id="' . $user_id . '"';

  $result = mysqli_query($con, $query);

?>


<section class="breadcrumb breadcrumb_bg">2
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>Product Checkout</h2>
            <p>Home <span>-</span> Shop Single</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="checkout_area padding_top">
  <div class="container">
    
    <br><br>
    <div class="billing_details">
      <div class="row">
        <form class="row contact_form" action="gardenerconfirmation.php" method="post" novalidate="novalidate">
          <div class="col-lg-8">
            <h3>Billing/Shipping Details</h3>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="first" name="name" placeholder="First name"/>
              <!-- <span class="placeholder" placeholder="First name"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="last" name="name2" placeholder="Last name" />
              <!-- <span class="placeholder" placeholder="Last name"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="number" name="number1" placeholder="Phone number" />
              <!-- <span class="placeholder" placeholder="Phone number"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="email" name="compemailany" placeholder="Email Address" />
              <!-- <span class="placeholder" placeholder="Email Address"></span> -->
            </div>
            <div class="col-md-8 form-group p_star">
              <input type="text" class="form-control" id="add1" name="add1" placeholder="Address line 01" />
              <!-- <span class="placeholder" placeholder="Address line 01"></span> -->
            </div>
            <div class="col-md-8 form-group p_star">
              <input type="text" class="form-control" id="add2" name="add2" placeholder="Address line 02"/>
              <!-- <span class="placeholder" placeholder="Address line 02"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="city" name="city" placeholder="Town/City" />
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="district" name="district" placeholder="District" />
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
            </div>
            <div class="col-md-4 form-group p_star">
              <input type="text" class="form-control" id="country" name="country" placeholder="Country" />
            </div>
            
            <h3>Payment</h3>
            <div class="col-md-8 form-group p_star">
              <label for="cname">Accepted Cards</label><br>
              <img width="70px" height="40px" src = "img/card1.png" class="cardphoto" >
              <img width="70px" height="40px" src = "img/card2.png" class="cardphoto" >
              <img width="70px" height="40px" src = "img/card3.png" class="cardphoto" >
              <img width="70px" height="40px" src = "img/card4.png" class="cardphoto" >


            </div>
            <div class="col-md-8 form-group p_star">
              <label for="cname">Name on Card</label>
              <input type="text" class="form-control" id="first" name="cardname" placeholder="Rutvik Goti"/>
              <!-- <span class="placeholder" placeholder="First name"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <label for="cname">Card Number</label>
              <input type="text" class="form-control" id="last" name="cardnumber" placeholder="1111-2222-3333-4444" />
              <!-- <span class="placeholder" placeholder="Last name"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <label for="cname">Exp Month</label>
              <input type="text" class="form-control" id="last" name="cardmonth" placeholder="September" />
              <!-- <span class="placeholder" placeholder="Last name"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <label for="cname">Exp Year</label>
              <input type="text" class="form-control" id="last" name="cardyear" placeholder="2022" />
              <!-- <span class="placeholder" placeholder="Last name"></span> -->
            </div>
            <div class="col-md-4 form-group p_star">
              <label for="cname">CVV</label>
              <input type="text" class="form-control" id="last" name="cvv" placeholder="123" />
              <!-- <span class="placeholder" placeholder="Last name"></span> -->
            </div>
            
          </div>
          
        <!-- </div> -->
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <?php

                while ($row = mysqli_fetch_array($result)) {

                  echo
                  '<li>
                    <a href="#">
                      ' . $row['first_name'] . ' ' . $row['last_name'] . '
                      <span class="middle">x ' . $row['qty'] . '</span>
                      <span class="last">Rs. ' . $row['qty'] * $row['price'] . '</span>
                    </a>
                  </li>';
                  $sum = $sum + $row['qty'] * $row['price'];
                  $quantity = $quantity + $row['qty'];
                }
                ?>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Subtotal
                    <span>Rs. <?php echo $sum ?></span>
                  </a>
                </li>
                <li>
                  <a href="#">Transportation(Rs. 99/person)
                    <span>Rs. <?php echo $quantity*99?></span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span>Rs. <?php echo $sum + 99*$quantity ?></span>
                  </a>
                </li>
              </ul>
                <br><br>
              <button type="submit" class="btn_3">Place Order</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php require "./includes/footer.php" ?>



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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac1e78ae3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>