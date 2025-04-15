<?php

require 'includes/conn.php';

session_start();

if (!isset($_SESSION['admin_email'])) {
    echo "<script>alert('Login Require');document.location='login.php';</script>";
    exit();
}
require "includes/header.php";


?>


<div class="mainContainer">
    <?php require "includes/sidebar.php" ?>


    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Add Product</h1>
            </div>
        </div>

        <div class="container col-md-6 my-4">
            <form class="row g-3" action="manage/addproduct.php" method="POST">
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
                <div class="col-md-6">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" name="qty" class="form-control" id="qty">
                </div>
                <!-- <div class="col-md-6">
                    <label for="desc" class="form-label">Description</label>
                    <input type="text" name="desc" class="form-control" id="desc">
                </div> -->
                <div class="col-md-6">
                    <label for="image" class="form-label">Image1</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="col-md-6">
                    <label for="image2" class="form-label">Image2</label>
                    <input type="file" name="image2" class="form-control" id="image2">
                </div>
                <div class="col-md-6">
                    <label for="image3" class="form-label">Image3</label>
                    <input type="file" name="image3" class="form-control" id="image3">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="category">category</label>
                    <select id="category" name="category" class="form-control my-2">
                        <option selected>Select a category</option>
                        <option value="Indoor Plants">Indoor Plants</option>
                        <option value="Monsoon Plants">Monsoon Plants</option>
                        <option value="Oxygen Plants">Oxygen Plants</option>
                        <option value="Cactus and Succulents">Cactus and Succulents</option>
                        <option value="Bonsai Plants">Bonsai Plants</option>
                        <option value="Lucky Bamboos">Lucky Bamboos</option>
                        <option value="Flower Plant">Flower Plant</option>
                        <option value="Fertilizer">Fertilizer</option>
                        <option value="Seeds">Seeds</option>
                        <option value="Planters">Planters</option>
                        <option value="Gardening Tools">Gardening Tools</option>
                        <option value="Miniature Garden Toys">Miniature Garden Toys</option>
                        <option value="Pebbles">Pebbles</option>
                        <option value="Gifts">Gifts</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="desc1" class="form-label">Description</label>
                    <input type="file" name="desc1" class="form-control" id="desc1">
                </div>

                <div class="col-md-6">
                    <label for="desc2" class="form-label">Plant Care</label>
                    <input type="file" name="desc2" class="form-control" id="desc2">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>