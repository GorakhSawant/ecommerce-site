<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
<html>

<head>
    <title>Superfine Agro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Superfine Agro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href=" all_products.php">All Products</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="customer/my_account.php">My Account</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Shopping Carts</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="cart.php">Sign Up</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact US</a>

                    </li>
                </ul>


                <form class="d-flex" role="search" method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search Product" />

                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <!--Main container starts from here -->
    <div class="main_wrapper">



        <!--  content wrapper starts -->
        <div class="content_wrapper">

            <div id="sidebar">

                <div id="sidebar_title">Categories</div>

                <ul id="cats">

                    <?php getCats(); ?>

                </ul>

                <div id="sidebar_title">Brands</div>

                <ul id="cats">

                    <?php getBrands(); ?>

                </ul>

            </div>

            <div id="content_area">

                <?php cart(); ?>

                <div id="shopping">
                    <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
                        <b style="color:yellow">Shopping Cart -</b> <b style="color:white">Total Items:<?php total_items(); ?> Total Price: <?php total_price() ?></b> <a href="cart.php" style="color:yellow"> Go to cart</a>
                    </span>
                </div>
                <?php $ip = getIp(); ?>

                <div id="products_box">

                    <form action="ECOMMERCE/cart.php" method="post" enctype="multipart/form-data">

                        <table align="center" width="700" bgcolor="skyblue">

                            <tr align="center">

                            </tr>
                            <tr align="center">
                                <th>Remove</th>
                                <th>Products</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>

                            <?php

                            $total = 0;

                            global $con;

                            $ip = getIp();

                            $sel_price = "select * from cart where ip_add='$ip'";

                            $run_price = mysqli_query($con, $sel_price);

                            while ($p_price = mysqli_fetch_array($run_price)) {

                                $pro_id = $p_price['p_id'];

                                $pro_price = "select * from product_id='$pro_id'";

                                $run_pro_price = mysqli_query($con, $pro_price);

                                while ($pp_price = mysqli_fetch_array($run_pro_price)) {

                                    $product_price = array($pp_price['product_price']);

                                    $product_title = $pp_price['product_title'];

                                    $product_image = $pp_price['product_image'];

                                    $single_price = $pp_price['product_price'];

                                    $values = array_sum($product_price);

                                    $total += $values;
                                }
                            }

                            ?>

                            <tr align="center">
                                <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>" /></td>
                                <td><?php echo $product_title; ?><br>
                                    <img src="admin_area/product_images/<?php echo $product_image; ?>" width="60" height="60" alt="">
                                </td>
                                <td><input type="text" size="4" name="qty" value="<?php echo $_SESSION['qty'] ?>"></td>
                                <?php
                                if (isset($_POST['update_cart'])) {
                                    $qty = $_POST['qty'];
                                    $update_qty = "update cart set qty='$qty'";
                                    $run_qty = mysqli_query($con, $update_qty);

                                    $_SESSION['qty'] = $qty;

                                    $total = $total * $qty;
                                }
                                ?>



                                <td><?php echo "Rs." . $single_price; ?></td>
                            </tr>

                            <tr align="right">
                                <td colspan="5"><b>Sub Total:</b></td>
                                <td><?php echo "Rs." . $total; ?></td>
                            </tr>




                        </table>

                    </form>

                </div>
            </div>

        </div>

        <!--  content wrapper ends -->


        <div id="footer">

            <h2 style="text-align:center; padding-top: 30px;">© 2022 Copyright: Superfine Agro</h2>

        </div>



    </div>

    <!--Main container ends here -->
</body>

</html>