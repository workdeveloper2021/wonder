<!DOCTYPE html>

<html lang="en">



<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cart</title>

  <!-- <title>wonder_raelyn_prints</title> -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include('include/head.php'); ?>

</head>



<body>
 <!--Header Start-->
 <?php include('include/header.php'); ?>
 <!--Header End-->
 
 <!-- cart start  -->
    <div id="cart">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="#">Home &nbsp; >  &nbsp; </a></li>
                        <li><a href="#">Private  &nbsp;  > &nbsp; </a></li>
                        <li><a href="#">Pictures &nbsp;  > &nbsp; </a></li>
                        <li class="active">Vacation</li>
                    </ul>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6"><label for="">Contact Information</label></div>
                            <div class="col-md-6"><label for="">Already have an account?  <a class="login" href="#">Login</a> </label></div>
                        </div>
                        <input placeholder="Email" type="email" name="" id="">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> Keep me up to date on news and offers </label><br>
                        <p class="ship_add">Shipping Address</p>
                        <input class="f_name" type="text" placeholder=" First name">
                        <input class="l_name" type="text" placeholder="Last name">
                        <input type="text" placeholder="Company (optional)">
                        <input type="text" placeholder="Address">
                        <input type="text" placeholder="Apartment , Suite etc (optional)">
                        <input type="text" placeholder="Suburb">
                        <!-- <input class="input_33_first" type="text" placeholder="Country region Australia"> -->
                        <!-- <input class="input_33_second" type="text" placeholder="State territory"> -->
                        <div class="dropdown country_dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Country region Australia
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown state_dropdown">
                            <button type="button" class="btn  btn-primary dropdown-toggle" data-toggle="dropdown">
                                State territory
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropd own-item" href="#">Link 3</a>
                            </div>
                        </div>

                        <input class="input_33_third" type="text" placeholder="postcode">
                        <input type="text" placeholder="Phone (optional)">
                        <a href="<?= base_url('checkout') ?>" class="btn continue_to_ship">Continue to Shipping</a>
                        <a class="return_to_cart" href="#">Return to cart</a>

                    </form>
                </div>
                <div class="col-md-6 pricing">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>$3.00</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Calculated at next step</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>USD $3.00+GST</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- cart end  -->


<!--Footer Start-->

<?php include('include/footer.php') ?>
<?php include('include/script.php') ?>
<!--Footer End-->

</body>



</html>