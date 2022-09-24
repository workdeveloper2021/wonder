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
   
    <!--header start-->
    
    <?php include('include/header.php'); ?>

    <!--header end-->


    <!-- Start main Section -->

    <div id="main">

        <div class="container">

            <div class="row">

                <!-- Start first main col-md-6 -->

                <div class="col-md-6">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Cart</a></li>
                            <li class="breadcrumb-item"><a href="#">Information</a></li>
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payment</li>
                        </ol>
                    </nav>

                    <fieldset>
                        <legend class="text-center">Express checkout</legend>

                        <div class="row">
                            <div class="col-4">
                                <span class="express_icon btn btn-primary"><img src="<?= base_url('assets/') ?>images/shop-pay.png" width="100%"></span>
                            </div>
                            <div class="col-4">
                                <span class="express_icon btn btn-warning"><img src="<?= base_url('assets/') ?>images/paypal.png" width="100%"></span>
                            </div>
                            <div class="col-4">
                                <span class="express_icon btn btn-dark"><img src="<?= base_url('assets/') ?>images/gpay.png" width="100%"></span>
                            </div>
                        </div>

                        <!-- <span class="express_icon btn btn-primary"><i class="fab fa-google-pay"></i></span>
<span class="express_icon btn btn-warning"><i class="fab fa-paypal"></i></span>
<span class="express_icon btn btn-dark"><i class="fab fa-google-pay"></i></span> -->

                    </fieldset>

                    <h6><span>OR</span></h6>

                    <!-- Start Contact Information Section -->

                    <div class="contact-information">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Contact Information </h4>
                            </div>
                            <div class="col-md-6">
                                <h5 class="span2">Already have an account? <a href="#">Log in</a></h5>
                            </div>
                        </div>
                        <form action="#" class="pt-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                            </div>
                            <input type="checkbox" name="" id=""> Keep me up to date on news and offers

                            <h4 style="margin-top: 30px;">Shipping address</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="from-group mb-2">
                                        <input type="text" name="firstName" class="form-control form-control-lg" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from-group mb-2">
                                        <input type="text" name="lastName" class="form-control form-control-lg" placeholder="Last name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="company" class="form-control form-control-lg" placeholder="Company (optional)">
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="address" class="form-control form-control-lg" placeholder="Address">
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="company" class="form-control form-control-lg" placeholder="Apartment, suite, etc. (optional)">
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="company" class="form-control form-control-lg" placeholder="Suburb">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <div class="select-wrap">
                                            <label>Country/region</label>
                                            <select name="color" style="width: 100%;">
                                                <option value="India">India</option>
                                                <option value="Australia">Australia</option>
                                                <option value="China">China</option>
                                                <option value="America">America</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <div class="select-wrap">
                                            <label>State/territory</label>
                                            <select name="color" style="width: 100%;">
                                                <option value="">State/territory</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <input type="text" name="pincode" class="form-control form-control-lg" placeholder="Postcode">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" name="submit" class="btn btn-lg btn-dark" style="">Continue to shipping</button>
                                <a href="#" class="reset_link" style="">Return to cart</a>
                            </div>



                        </form>

                    </div>

                    <!-- End Contact Information Section -->

                </div>

                <!-- End first main col-md-6 -->


                <!-- Start Second main col-md-6 -->

                <div class="col-md-6">

                    <div class="container">

                        <div class="row">
                            <div class="col-2">
                                <img src="<?= base_url('assets/') ?>images/Vector wall decals images1.png" width="100%" alt="" style="width:45px;">
                            </div>
                            <div class="col-6">
                                <h5 style="margin-bottom: 0;font-size: 14px;"> Product Description</h5>
                                <small>Cluster</small>
                            </div>
                            <div class="col-4">
                                <h5 style="font-size:20px;">$240.00</h5>
                            </div>
                        </div>

                        <hr style="margin: 30px 0;">

                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-md-10">
                                    <input type="text" class=" mt-2 form-control form-control-lg" placeholder="Gift card or discount code"></div>
                                <div class="col-md-2">
                                    <div class="input-group mt-2">
                                        <button type="submit" class="btn btn-light btn-lg">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <hr style="margin: 30px 0;">

                        <div class="row">
                            <div class="col-6">
                                <p class="subtotal">Subtotal</p>
                            </div>
                            <div class="col-6">
                                <p class="text-right">$240.00</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <p>Shipping <i class="fas fa-question-circle"></i></p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-right">Calculated at next step</p>
                            </div>
                        </div>

                        <hr style="margin: 30px 0;">

                        <div class="row mt-4">
                            <div class="col-6">
                                <h3>Total</h3>
                                <p>Including $21.82 in taxes</p>
                            </div>
                            <div class="col-6">
                                <p class="text-right">
                                    <span>AUD</span>
                                    <span style="font-size: 30px;"> $240.00</span>
                                </p>
                            </div>
                        </div>


                    </div>

                </div>


                <!-- End Second main col-md-6 -->


            </div>

        </div>

    </div>

    <!-- End main Section -->


    <!--footer start-->

    <?php include('include/footer.php') ?>
    <?php include('include/script.php') ?>

    <!--footer end-->
</body>

</html>