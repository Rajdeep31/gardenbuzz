<?php
session_start();
require "./includes/head.php";
require './includes/conn.php';

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
            <h2>Order Confirmation</h2>
            <p>Home <span>-</span> Order Confirmation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="confirmation_part padding_top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="confirmation_tittle">
          <h1><span>Thank you. Your order has been received.</span></h1>
          <a href="invoicegardener.php"><h4 fonr-color:blue;>View Bill.</h4></a>
        </div>
      </div>
  </div>
</section> 

<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name1 = $_POST['name2'];
  $number = $_POST['number1'];
  $add1 = $_POST['add1'];
  $city = $_POST['city'];
  $district = $_POST['district'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
}


$user_id = $_SESSION['user_id'];
$query = 'SELECT gardener.id, gardener.price, gardener.first_name, gardener.image, cart.qty FROM `cart`, `gardener` where gardener.id=cart.product_id  and cart.user_id="' . $user_id.'"';
$result = mysqli_query($con, $query);
// echo $user_id;
while ($row = mysqli_fetch_array($result)) {
  // echo "<tr>";
  // echo "<th>" . $row['id'] . "</th>";
  // echo "<th>" . $row['price'] . "</th>";
  // echo "</tr>";

  $order = "INSERT INTO `orders`(`product_id`, `user_id`, `product_qty`, `order_amount`, `status`,`last_name`,`address_line`,`address_city`,`address_district`,`address_country`,`zip`) 
    VALUES (" . $row['id'] . "," . $user_id . "," . $row['qty'] . "," . $row['price'] * $row['qty'] + 49 . ", 'Confirmed', '$name1','$add1','$city','$district','$country','$zip')";

$result = mysqli_query($con, $order);

// $deletefromcart = "DELETE FROM CART WHERE cart.user_id='$user_id'";
// $deleted = mysqli_query($con, $deletefromcart);

}

?>

<!-- <section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>Order Confirmation</h2>
            <p>Home <span>-</span> Order Confirmation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="confirmation_part padding_top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="confirmation_tittle">
          <h1><span>Thank you. Your order has been received.</span></h1>
        </div>
      </div>
  </div>
</section> -->

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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac24fb7b3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>

</html>

</html>

</html>

</html>

</html>