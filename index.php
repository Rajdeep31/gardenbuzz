<?php
session_start();
?>
<?php require './includes/head.php' ?>
<?php require './includes/conn.php';
	require './includes/is_added_to_cart.php'

?>


<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/gardenbuzz.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="newindex/content.css">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive plants website - Bedimcode</title>

		<style>
        
            body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif; /* Optional: Set a preferred font */
        }
        
        
        header {
            background-color: #F5F5DC;
            padding: 1px; /* Adjust the padding as needed */
            text-align: center;
            width: 100%; /* Ensure the header spans the entire width */
        }

    </style> 
    <style>
        .vine_image{
            width: 50%;
            height: auto;
            margin-top: 80px;
        }
    </style>
</head>
<!-- <div class="border-vine">
          <img
            src="newindex/vines-removebg-preview.png"
            alt=""
            class="vine_image"
          />
          <img
            src="newindex/vine1_rotate-removebg-preview.png"
            alt=""
            class="vine_image"
          />
</div> -->

<section class="banner_part">
<div class="border-vine">
          <img
            src="newindex/vines-removebg-preview.png"
            alt=""
            class="vine_image"
          />
          <img
            src="newindex/vine1_rotate-removebg-preview.png"
            alt=""
            class="vine_image"
          />
</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="banner_slider owl-carousel">
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Buy green to save green</h1>
										<p>
											Buy the best indoor plants.
											We have a plant for each door.
										</p>
										<a href="category.php" class="btn_2">Buy now</a>
										<!-- <a href="http://127.0.0.1:5000" class="btn_2">Buy now</a> -->
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="newindex/bg10-removebg-preview.png" alt="" />
							</div>
						</div>
					</div>
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Indoor Plants</h1>
										<p>
											Choose among wide variety of indoor plants.
										</p>
										<a href="#" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="img/banner.png" alt="" />
							</div>
						</div>
					</div>
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Budget Friendly</h1>
										<p>
											Eco-Friendly, Pocket-Friendly.
										</p>
										<a href="#" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="img/banner.png" alt="" />
							</div>
						</div>
					</div>
				</div>
				<div class="slider-counter"></div>
			</div>
		</div>
	</div>
</section>


<!-- <section class="product_list section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section_tittle text-center">
					<h2>Awesome <span>Shop</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="product_list_slider owl-carousel">
					<div class="single_product_list_slider">
						<div class="row align-items-center justify-content-between">
						<?php

							// $query = "SELECT * from `products`";
							// $result = mysqli_query($con, $query);

							// while ($row = mysqli_fetch_array($result)) {
							// 	echo '<div class="col-lg-3 col-sm-6" style="padding: 10px 20px !important;">
							// 			<div class="single_product_item">
							// 				<img width="120px" src="img/product/'.$row['image'].'" alt="djwij" />
							// 				<div class="single_product_text">
							// 					<h4>'. $row['title'] .'</h4>
							// 					<h3>Rs. '. $row['price'] .'</h3>';
							// 					if(!check_if_added_to_cart($row['id'])){
							// 					echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="add_cart">+ add to cart<i class="ti-heart"></i></a>';
							// 					} else {
							// 						echo '<a href="#" class="add_cart" disabled>+ add to cart<i class="ti-heart"></i></a>';
							// 					}
											
							// 			echo ' </div>
							// 			</div>
							// 		</div>';
							// }
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 style="font-size: 30px; text-align: center;" class="section__title about__title" >
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                            We have over 4000+ unbiased reviews and our customers 
                            trust our plant process and delivery service every time
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always deliver on time.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to protect and care for your plants.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always come over for a check-up after sale.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="#" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Steps to start your <br> plants off right
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Choose Plant</h3>
                            <p class="steps__card-description">
                                We have several varieties plants you can choose from.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Place an order</h3>
                            <p class="steps__card-description">
                                Once your order is set, we move to the next step which is the shipping.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Get plants delivered</h3>
                            <p class="steps__card-description">
                                Our delivery process is easy, you receive the plant direct to your door.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> products
                </h2>

                <p class="product__description">
                    Here are some selected plants from our showroom, all are in excellent 
                    shape and has a long life span. Buy and enjoy best quality.
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product1.png" alt="" class="product__img">

                        <h3 class="product__title">Cacti Plant</h3>
                        <!-- <span class="product__price">$19.99</span> -->

                        <!-- <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product2.png" alt="" class="product__img">

                        <h3 class="product__title">Cactus Plant</h3>
                        <!-- <span class="product__price">$11.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product3.png" alt="" class="product__img">

                        <h3 class="product__title">Aloe Vera Plant</h3>
                        <!-- <span class="product__price">$7.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product4.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <!-- <span class="product__price">$5.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product5.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <!-- <span class="product__price">$10.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product6.png" alt="" class="product__img">

                        <h3 class="product__title">Green Plant</h3>
                        <!-- <span class="product__price">$8.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 style="font-size: 30px; text-align: center;" class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    <a href="chatbot/index.php" >My flowers are falling off or dying?</a>
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    <a href="chatbot/index.php" >What causes leaves to become pale?</a>
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    <a href="chatbot/index.php" >What causes brown crispy leaves?</a>
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    <a href="chatbot/index.php" >How do i choose a plant?</a>
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    <a href="chatbot/index.php" >How do I change the pots?</a>
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    <a href="chatbot/index.php" >Why are gnats flying around my plant?</a>
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


<!-- <section class="product_list best_seller section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section_tittle text-center">
					<h2>Best Sellers <span>shop</span></h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-12">
				<div class="best_product_slider owl-carousel">
					<div class="single_product_item">
						<img src="img/product/product_1.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_2.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_3.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_4.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_5.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="subscribe_area section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="subscribe_area_text text-center">
					<h5>Join Our Newsletter</h5>
					<h2>Subscribe to get Updated with new offers</h2>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2" />
						<div class="input-group-append">
							<a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
						</div>
					</div>
				</div>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721abfb4f723390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>
