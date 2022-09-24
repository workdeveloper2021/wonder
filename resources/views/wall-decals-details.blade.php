@extends('layouts.main')
 <!--Banner Start-->
@section('content');

    <!--slip on all pages start-->
    <div id="slip" style="width: 100%;float: left;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img style="width:100%;height: auto;margin-bottom:50px;" src="{{ URL::to('assets/') }}/images/Whatsappimage.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    
    
    <!--slip on all pages end-->






   <!-- umbrella section start  -->

   <section id="pink_set">

    <div class="container">

        <div class="row">

                <div class="col-md-6">
                   <div class="demo">
                        <div class="item">            
                            <div class="clearfix">
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec1.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec1.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec2.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec2.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec3.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec3.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec4.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec4.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec1.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec1.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec2.png" style="width: 10%"> 
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec2.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec3.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec3.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec4.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec4.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec1.png" style="width: 10%"> 
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec1.png" alt=""> 
                                    </li>
                                    <li data-thumb="{{ URL::to('assets/') }}/images/Wall Dec2.png" style="width: 10%">
                                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec2.png" alt=""> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                      
    
                    </div>  
                  
    
                </div>

                <div class="col-md-6">

                    <div class="content">

                        <h1>WISTERIA WALL DECALS - PERFECTLY PINK SET</h1>

                        <div class="row" style="padding: 30px 0;">

                            <div class="col-6">
                               <h3 style="font-weight: normal; font-size: 1.2rem;">Price</h3>    
                                <h3>$12.00 AUD</h3>



                            </div>

                            <div class="col-6">

                                <div class="dropdown">

                                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">

                                        <img class="img-fluid"  width="19%" src="{{ URL::to('assets/') }}/images/aus_Flag.png" alt=""> AUS

                                    </button>

                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#"> <img class="img-fluid" width="19%" src="{{ URL::to('assets/') }}/images/china.png" alt=""> CHINA </a>

                                        <a class="dropdown-item" href="#"> <img class="img-fluid" width="19%" src="{{ URL::to('assets/') }}/images/japan.png" alt=""> JAPAN </a>

                                        <a class="dropdown-item" href="#"> <img class="img-fluid" width="19%" src="{{ URL::to('assets/') }}/images/usa.png" alt=""> USA </a>

                                        <a class="dropdown-item" href="#"> <img class="img-fluid" width="19%" src="{{ URL::to('assets/') }}/images/uk.png" alt=""> UK </a>

                                        <a class="dropdown-item" href="#"> <img class="img-fluid" width="19%" src="{{ URL::to('assets/') }}/images/germany.png" alt=""> GERMANY </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row" style="padding-left: 3%;">
                            
                            <div class="col-12">
                                  <h3 style="font-weight: normal; font-size: 1.2rem;">Size</h3>                              
                            </div>
                            
                            <div class="col-12">

                                <!-- Nav tabs -->

                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">

                                        <a class="nav-link active" data-toggle="tab" href="#home">1/2 Pack jungle</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#menu1">3/4 Pack Jungle</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#menu2">Full Pack Jungle</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#menu3">Jungle Leaf Add On Pack</a>

                                    </li>

                                </ul>



                                <!-- Tab panes -->

                                <!--<div class="tab-content">

                                    <div id="home" class="container tab-pane active"><br>

                                        <h3>1/2 Pack jungle </h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    </div>

                                    <div id="menu1" class="container tab-pane fade"><br>

                                        <h3>3/4 Pack Jungle</h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    </div>

                                    <div id="menu2" class="container tab-pane fade"><br>

                                        <h3>Full Pack Jungle</h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    </div>

                                    <div id="menu3" class="container tab-pane fade"><br>

                                        <h3>Jungle Leaf Add On Pack</h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    </div>

                                </div>-->

                            </div>

                        </div>

                        

                        <div class="row pt-3">

                            <div class="col-12">
                                  <h3 style="font-weight: normal; font-size: 1.2rem;padding-left: 3%;">Quantity</h3>                              
                            </div>
                            <div class="col-12">
                                <div class="qtySelector text-center">


                                    <i class="fa fa-minus decreaseQty"></i>

                                    <input style="padding: 7.5px 5px;" type="text" class="qtyValue" value="1" />

                                    <i class="fa fa-plus increaseQty"></i>

                                </div>

                            </div>

                        </div>

                        <div class="row buttons" style="padding-top: 3%;">

                            <div class="col-6">

                                <a href="#"> <button>ADD TO CART</button> </a>

                            </div>

                            <div class="col-6">

                                <a href="#"> <button>BUY IT NOW</button> </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>





    <!-- umbrella section end  -->



    <!-- kangaroo banner start  -->

    <section id="kangaroo">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Layer 55.png" alt="">

                </div>

            </div>

        </div>

    </section>

    <!-- kangaroo banner end  -->

    <!-- faq baby start  -->

    <section id="faq_baby">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">

                            <div class="panel-heading " role="tab" id="headingOne">

                                <h4 class="panel-title active">

                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: 'Mulish', sans-serif;color: #4e6b7d;">

                                        PLEASE ALLOW 10 BUSINESS DAYS TO SHIP

                                    </a>

                                </h4>



                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">

                                <div class="panel-body" style="font-family: 'Palanquin', sans-serif;">Transform even the darkest space into a bright and cheerful garden room with these oversized peony and rose decals. A graceful design, the blooms are taken from watercolour paintings of pale pink and creamy white peonies

                                    and roses. With a bit of contrast from the leaves that frame each of the blooms, these easy-to-use decals are sure to delight. Available in full or half sets of five or ten flowers they will give the space a hand-painted,

                                    mural-like look with a great deal of elegance and charm. If you cannot have a garden, this decal set is the next best thing.

                                    <br>

                                    <br> The decals can be purchased in sets. Full and half set, see detailed image. Full set includes 10 watercolour flowers approx. 55cm long and 9 leaves each 30cm long Half set includes 5 watercolour flowers approx.

                                    55cm long and 7 leaves each 30cm long





                                </div>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingTwo">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family: 'Mulish', sans-serif;color: #4e6b7d;">

                                        ARE THE DECALS EASY TO INSTALL?

                                    </a>

                                </h4>



                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                                <div class="panel-body" style="font-family: 'Palanquin', sans-serif;">Transform even the darkest space into a bright and cheerful garden room with these oversized peony and rose decals. A graceful design, the blooms are taken from watercolour paintings of pale pink and creamy white peonies

                                    and roses. With a bit of contrast from the leaves that frame each of the blooms, these easy-to-use decals are sure to delight. Available in full or half sets of five or ten flowers they will give the space a hand-painted,

                                    mural-like look with a great deal of elegance and charm. If you cannot have a garden, this decal set is the next best thing.

                                </div>

                            </div>

                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingThree">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family: 'Mulish', sans-serif;color: #4e6b7d;">

                                        SHIPPING

                                    </a>

                                </h4>

                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

                                <div class="panel-body" style="font-family: 'Palanquin', sans-serif; ">Transform even the darkest space into a bright and cheerful garden room with these oversized peony and rose decals. A graceful design, the blooms are taken from watercolour paintings of pale pink and creamy white peonies

                                    and roses. With a bit of contrast from the leaves that frame each of the blooms, these easy-to-use decals are sure to delight. Available in full or half sets of five or ten flowers they will give the space a hand-painted,

                                    mural-like look with a great deal of elegance and charm. If you cannot have a garden, this decal set is the next best thing.

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    
    <!-- faq baby end  -->

    <!-- video clip start  -->

    <section id="video_clip_wall">

        <div class="container">

            <div class="row">

                <div class="col-md-4" style="text-align: center;">

                    <img class="img-fluid" style="width: 100%;height: 100%;" src="{{ URL::to('assets/') }}/images/Video_Clips.png" alt="">

                </div>

                <div class="col-md-5" style="text-align: center;padding: 10% 0;">

                    <div class="text">

                        <div class="text_in-video" style="text-align: left;">

                            <p style="font-size: 25px;">GENTLE ON THE WALLS</p>

                            <p>The leaves that frame each of the blooms, delight. <br> Available in full or half sets of five</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 pt-3 pb-3" style="background-color: #fef8f9;">

                    <p style="margin-bottom: 10px;">Reviews</p>

                    <img src="{{ URL::to('assets/') }}/images/Layer 65.png" class="img-fluid" alt="" width="80%">

                    <img style="margin-top: 20px;"  src="{{ URL::to('assets/') }}/images/Starcopy.png" class="img-fluid" width="80%" alt="">

                    <div class="row py-3">

                        <div class="col-6">05/09/2021</div>

                        <div class="col-6">Half Pack</div>

                    </div>

                    <p>Amazing products! Wish I had more rooms to decorate - super easy to use and arrived very quickly. Thank you so much!</p>

                </div>

            </div>

        </div>

    </section>

    <!-- video clip end  -->

    <!-- slider  -->

    <div id="slider_wrapper">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <h2>RELATED PRODUCTS</h2>

                </div>

            </div>

            <div class="row">

                <div class="wrapper">

                    <div class="carousel1 owl-carousel">

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 40.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Classic Pink Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 17.00</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 25.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Classic Pink Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 26.00</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 26.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Lavender Pink Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 15.00</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 27.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 10</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 41.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Butterfly Wall Decal Set</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 17</strong></p>

                        </div>

                        <!-- <div class="card">

                      <img src="img/pic3.jpeg" alt="">

                      <h2>Gated Projects</h2>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>

                  </div> -->

              </div>

          </div>

      </div>

      <div class="row btm_line">

        <div class="col-12">

            <p>Remarkable Handprinted Wall Decals and Prints Showcasing Australian Native Flowers</p>

        </div>

    </div>

</div>

</div>

<!-- /slider  -->



@endsection
@section('script')

 <script src="{{ URL::to('assets/lightbox/') }}/js/lightslider.js"></script> 
<!--Footer End-->
 <script>
         $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
        });
    </script>
<script>

    var minVal = 1,

            maxVal = 20; // Set Max and Min values

        // Increase product quantity on cart page

        $(".increaseQty").on('click', function() {

            var $parentElm = $(this).parents(".qtySelector");

            $(this).addClass("clicked");

            setTimeout(function() {

                $(".clicked").removeClass("clicked");

            }, 100);

            var value = $parentElm.find(".qtyValue").val();

            if (value < maxVal) {

                value++;

            }

            $parentElm.find(".qtyValue").val(value);

        });

        // Decrease product quantity on cart page

        $(".decreaseQty").on('click', function() {

            var $parentElm = $(this).parents(".qtySelector");

            $(this).addClass("clicked");

            setTimeout(function() {

                $(".clicked").removeClass("clicked");

            }, 100);

            var value = $parentElm.find(".qtyValue").val();

            if (value > 1) {

                value--;

            }

            $parentElm.find(".qtyValue").val(value);

        });

        // baby cart page slider bottom

        $(".carousel1").owlCarousel({

            margin: 20,

            loop: true,

            autoplay: false,

            // autoplay: true,

            autoplayTimeout: 2000,

            autoplayHoverPause: true,

            responsive: {

                0: {

                    items: 1,

                    nav: false

                },

                600: {

                    items: 3,

                    nav: false

                },

                1000: {

                    items: 5,

                    nav: false

                }

            }

        });

        // wisteria top slider

        $(".carousel_wisteria").owlCarousel({

            margin: 20,

            loop: true,

            autoplay: false,

            // autoplay: true,

            autoplayTimeout: 2000,

            autoplayHoverPause: true,

            responsive: {

                0: {

                    items: 4,

                    nav: false

                },

                600: {

                    items: 5,

                    nav: false

                },

                1000: {

                    items: 5,

                    nav: false

                }

            }

        });

    </script>


@endsection