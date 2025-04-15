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
    <?php 
    require "includes/sidebar.php" 
    ?>


    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Add Gardener Detail</h1>
            </div>
        </div>

        <div class="container col-md-6 my-4">
            <form class="row g-3" action="manage/addgardener.php" method="POST">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">first_name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name">
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">last_name	</label>
                    <input type="text" name="last_name" class="form-control" id="last_name">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image1</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="col-md-6">
                    <label for="Age" class="form-label">Age</label>
                    <input type="number" name="Age" class="form-control" id="Age">
                </div>
                <div class="col-md-6">
                    <label for="Number" class="form-label">Contact Number</label>
                    <input type="number" name="Number" class="form-control" id="Number">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label for="experi_year" class="form-label">experi_year</label>
                    <input type="number" name="experi_year" class="form-control" id="experi_year">
                </div>
                <div class="col-md-6">
                    <label for="location" class="form-label">location</label>
                    <input type="text" name="location" class="form-control" id="location">
                </div>
                <div class="form-group col-md-6">
                    <label for="Experties">Experties</label>
                    <select id="Experties" name="Experties" class="form-control my-2">
                        <option selected>Select a Experties</option>
                        <option value="Planting and Transplanting">Planting and Transplantingerties</option>
                        <option value="Pruning and Trimming">Pruning and Trimming</option>
                        <option value="Garden Design">Garden Design</option>
                        <option value="Soil Preparation">Soil Preparation</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price">
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