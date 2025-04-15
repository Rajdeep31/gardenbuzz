<?php
require 'includes/conn.php';

session_start();

if(!isset($_SESSION['admin_email'])){
    echo "<script>alert('Login Require');document.location='login.php';</script>";
    exit();
}

    $mail = '';
    if (isset($_SESSION['admin_email'])){
        $mail = $_SESSION["admin_email"];
    }
    $name= '';

    $query = 'SELECT * FROM admin';
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)){
        if($row['email'] == $mail){
            $name = $row['name'];
        }
    }

?>
<?php require_once "includes/header.php" ?>

<style>
    .dashboard-item {
        width: calc(33.33% - 40px);
        height: 150px;
        border: 1px solid #ddd;
        padding: 20px;
        margin: 20px;
        background-color: #f9f9f9;
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
        text-align: center;
        transition: all 0.3s ease;
    }

    .dashboard-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .dashboard-item h2 {
        margin-bottom: 5px;
        font-size: 24px;
        color: #333;
    }

    .dashboard-item h3 {
        margin-top: 0;
        font-size: 36px;
        color: #007bff;
    }
</style>


<?php
// $seller_id = $_SESSION['admin_id'];

$query1 = 'SELECT * FROM products ';
    $result = mysqli_query($conn, $query1);
    while($row = mysqli_fetch_array($result)){
        $allproduct=$allproduct+1;
    }

$query2 = 'SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, products.title, products.image, users.first_name, users.last_name FROM `orders`, `products`, `users` where orders.product_id=products.id and orders.user_id=users.id ';
    $result = mysqli_query($conn, $query2);
    while($row = mysqli_fetch_array($result)){
        $allorder=$allorder+1;
    }

$query3 = 'SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, products.title, products.image, users.first_name, users.last_name FROM `orders`, `products`, `users` where orders.product_id=products.id and orders.user_id=users.id and orders.status="Confirmed" ';
    $result = mysqli_query($conn, $query3);
    while($row = mysqli_fetch_array($result)){
        $Confirmedorder=$Confirmedorder+1;
    }

$query4 = 'SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, products.title, products.image, users.first_name, users.last_name FROM `orders`, `products`, `users` where orders.product_id=products.id and orders.user_id=users.id and orders.status="Shipped" ';
    $result = mysqli_query($conn, $query4);
    while($row = mysqli_fetch_array($result)){
        $Shippedorder=$Shippedorder+1;
    }

$query5 = 'SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, products.title, products.image, users.first_name, users.last_name FROM `orders`, `products`, `users` where orders.product_id=products.id and orders.user_id=users.id and orders.status="Delivered" ';
    $result = mysqli_query($conn, $query5);
    while($row = mysqli_fetch_array($result)){
        $Deliveredorder=$Deliveredorder+1;
    }

$query6 = 'SELECT * FROM users ';
    $result = mysqli_query($conn, $query6);
    while($row = mysqli_fetch_array($result)){
        $Users=$Users+1;
    }

$query7 = 'SELECT * FROM gardener ';
    $result = mysqli_query($conn, $query7);
    while($row = mysqli_fetch_array($result)){
        $Gardeners=$Gardeners+1;
    }

?>

<div class="mainContainer">
    <?php require "includes/sidebar.php" ?>


    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-8 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Welcome to Admin Panel</h1>
                <h4>Hi, <?php echo $name ?> </h4>
            </div>
        </div>

        <div>
            <div class="dashboard-item">
                <i class="fas fa-box-open fa-3x"></i>
                <h2>Products</h2>
                <h3><?php echo $allproduct ?></h3>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-shopping-cart fa-3x"></i>
                <h2>Orders</h2>
                <h3><?php echo $allorder ?></h3>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-check-circle fa-3x"></i>
                <h2>Confirmed</h2>
                <h3><?php echo $Confirmedorder ?></h3>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-truck fa-3x"></i>
                <h2>Shipped</h2>
                <h3><?php echo $Shippedorder ?></h3>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-check-circle fa-3x"></i>
                <h2>Delivered</h2>
                <h3><?php echo $Deliveredorder ?></h3>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-check-circle fa-3x"></i>
                <h2>Users</h2>
                <h3><?php echo $Users ?></h3>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-check-circle fa-3x"></i>
                <h2>Gardeners</h2>
                <h3><?php echo $Gardeners ?></h3>
            </div>
        </div>
        <!-- <div class="container">
            <table class="table container">
                <thead class="py-4">
                    <tr>
                        <th scope="col">Admin Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // require "includes/conn.php" 
                    ?>
                    <?php
                    // $query = 'SELECT * FROM `admin`';

                    // $result = mysqli_query($conn, $query);

                    // while ($row = mysqli_fetch_array($result)) {
                    //     echo "<tr><th>" . $row['id'] . "</th>";
                    //     echo "<th>" . $row['name'] . "</th>";
                    //     echo "<td>" . $row['mobile'] . "</td>";
                    //     echo "<td>" . $row['email']  . "</td>";
                    //     echo "<td>
                    //             <a href='scripts/delete_script.php?id={$row['id']}'><button type='button' class='btn btn-danger'>Delete</button></a>
                    //         </td></tr>";
                    // }

                    ?>
                </tbody>
            </table>
        </div>
    </div> -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>