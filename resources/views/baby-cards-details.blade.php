@extends('layouts.main')
 <!--Banner Start-->
@section('content');
  <style type="text/css">
        svg {width: 100%; height: auto;}
        /*  svg path {fill: #000 !important;
        }*/


        .svg-container {
          display: inline-block;
        }

       /* .svg-container svg:hover path {
          fill: blue !important;
        }*/
        .kangaroo img{
            width: 100%;
            height: auto;
        }
    </style>
    <!--slip on all pages start-->
    <div id="slip" style="width: 100%;float: left;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img style="width:100%;height: auto;" src="{{ URL::to('assets/') }}/images/Whatsappimage.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    
    
    <!--slip on all pages end-->

    <!-- umbrella section start  -->

    <section id="umbrella">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="img">

                       
                            <div class="svg-container">
                               <img class="svg" src="{{ URL::to('/') }}/{{ $product->image}}" alt="Microsoft" width="350" height="350">
                            </div>

                    </div>

                </div>

                <div class="col-md-6">

 <form action="{{ route('cart.store') }}" method="post">
                        @csrf
                    <div class="content">

                        <h1>{{ $product->title }}</h1>

                        <div class="row" style="padding: 30px 0;">

                            <div class="col-6">
                                
                                <h3 style="font-weight: normal; font-size: 1.2rem;">Price</h3>
                                <h3>$<span id="priceshow">{{ $product->price }}</span></h3>



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

                        <div class="row input_field" style="padding-left: 3%;">

                            <div class="col-12">
                                <h3 style="font-weight: normal; font-size: 1.2rem;padding:20px 0 0;">Size</h3>
                                
                                <select name="size" required>
                                   
                                 @if(!empty($product->size)){
                                 <?php
                                    $size = explode(',',$product->size);
                                 ?>
                                 @foreach($size as $key => $ft) 
                                    <option value="{{$ft}}">{{$ft}}</option>
                                
                                 @endforeach
                                  @endif

                                </select>

                                <h3 style="font-weight: normal; font-size: 1.2rem;padding:20px 0 0;">Add Your Text</h3> 
                                <textarea type="text" maxlength="{{ $product->minmum_character }}" name="printing_text" id="printing_text" required></textarea>

                                <br>

                                <h3 style="font-weight: normal; font-size: 1.2rem;padding:20px 0 0;">Chouse Your Font Type</h3> 
                                <select name="font" id="font_style" required>
                                 <option value="">Select Font</option>
                                 @if(!empty($font)){
                                 @foreach($font as $key => $ft) 
                                    <option value="{{$ft->name}}">{{$ft->name}}</option>
                                
                                 @endforeach
                                  @endif

                                </select>


                            </div>

                        </div>

                        <div class="row pt-3">

                            <?php 
                                if (!empty($product->color)) {
                                  $colores = explode(',',$product->color);
                                  foreach ($colores as $key => $valu) {
                             ?>       
                             
                            <div class="col-4">

                                <p class="selected">Selected Color</p>

                                <input style="border: none;" type="color"  class="color-code" name="color[]" value="<?= $valu; ?>">
                                <input type="hidden" id="color_code{{$key}}" value="{{$valu}}">

                            </div>

                              <?php     }  } ?>

                        </div>

                        <div class="row pt-3" style="padding: 30px 0;">



                            <div class="col-12">

                                  <h3 style="font-weight: normal; font-size: 1.2rem;padding-left: 3%;">Quantity</h3>                              

                            </div>

                            <div class="col-12">

                                <div class="qtySelector text-center">





                                    <i class="fa fa-minus decreaseQty"></i>



                                    <input style="padding: 7.5px 5px;" type="text" name="qty" class="qtyValue" value="1" />



                                    <i class="fa fa-plus increaseQty"></i>



                                </div>



                            </div>



                        </div>

                         <div class="row buttons">

                            <div class="col-6">

                               <input type="hidden" name="product_id" value="{{$product->id}}">
                                <button name="submit" value="cart" type="submit">ADD TO CART</button>


                            </div>

                            <div class="col-6">

                                <button name="submit" value="checkout" type="submit">BUY IT NOW</button> 

                            </div>

                        </div>

                    </div>
              </form>
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

                    <img class="img-fluid" src="{{ URL::to('/') }}/{{ $product->banner}}" alt="">

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

                        <?php
                    $ftitle = explode('|',$product->ftitle);
                    $fdescription = explode('|',$product->fdescription);
                     if(!empty($ftitle)){
                        foreach($ftitle as $key => $ft){

                    ?>
                    <?php   if($key == 0){ ?>
                        <div class="panel panel-default">
                              
                                   
                                
                                
                            <div class="panel-heading " role="tab" id="headingOne">

                                <h4 class="panel-title {{ ($key == 0)?'active':''}}">

                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: 'Mulish', sans-serif;color: #4e6b7d;">

                                       {{$ftitle[$key] }}

                                    </a>

                                </h4>



                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">

                                <div class="panel-body" style="font-family: 'Palanquin', sans-serif;">{{$fdescription[$key] }}

                                </div>

                            </div>

                        </div>
                    <?php }else{ ?>
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingTwo">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family: 'Mulish', sans-serif;color: #4e6b7d;">

                                       {{$ftitle[$key] }}

                                    </a>

                                </h4>



                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                                <div class="panel-body" style="font-family: 'Palanquin', sans-serif;">{{$fdescription[$key] }}
                                </div>

                            </div>

                        </div>

                    <?php } ?>    
                    <?php } } ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- faq baby end  -->

    <!-- video clip start  -->

    <section id="video_clip">

        <div class="container">

            <div class="row">

                <div class="col-md-6" style="text-align: center;">

                    <img class="img-fluid" style="width: 69%;height: 100%;" src="{{ URL::to('/') }}/{{$product->video}}" alt="">

                </div>

                <div class="col-md-6" style="text-align: center;padding: 10% 0;">

                    <div class="text">

                        <div class="text_in-video" style="text-align: left;">



                            <?= $product->v_description ?>


                        </div>

                    </div>

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

                            <img src="{{ URL::to('assets/') }}/images/Layer 73.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Classic Pink Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 17.00</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 74.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Classic Pink Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 26.00</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 75.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Lavender Pink Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 15.00</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 76.png" alt="">

                            <br>

                            <p style="color: #4e6b7f; font-size: 12px;">Peony & Rose Wall Decals</p>

                            <p style="color: #4e6b7f; font-size: 12px;">From : <strong>AUD 10</strong></p>

                        </div>

                        <div class="card">

                            <img src="{{ URL::to('assets/') }}/images/Layer 77.png" alt="">

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
    
 <script type="text/javascript">
        
$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
});

    </script>
 <script type="text/javascript">

    $(document).on('input','.color-code',function(){
        var col = [];
         $('.color-code').each(function() {
             col.push(this.value); 
         });

      for (var i = 0; i < col.length; i++) {
          var color = $('#color_code'+i).val();
         $('.replaced-svg path').each(function(x) {
            var text = rgb2hex($(this).css('fill'));
                 if (text == color) {
                   $(this).css('fill',col[i]);
                   $('#color_code'+i).val(col[i]);
                 }
          
        });
       }
    });

    var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");  
    
    function rgb2hex(rgb) {
         rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
         return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    function hex(x) {
      return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
     }

    </script>
    <script type="text/javascript">
    function calprice(){
        var font = $('#font_style').val();
        var text = $('#printing_text').val();
        var pro_id = "{{$product->id}}";
         $.ajax({
            url: "{{ route('fetch-font-price') }}",
            type:'get',
            data:{font:font,text:text,pro_id:pro_id},
            success:function(res){
                $('#priceshow').html(res);
            }
         })
    }
    $(document).on('change','#font_style',function(){
         var font = $(this).val();
        calprice();        
        $('#font_type').css("font-family", font);
       
    })
    $(document).on('keyup','#printing_text',function(){
         var text = $(this).val();
         calprice();
        $('#font_type').html(text);
       
    })
    $(document).on('change','#text-color',function(){
         var text = $(this).val();
        $('#font_type').css("color", text);
       
    })

$(document).on('change','#text-color',function(){
         var text = $(this).val();
        $('#font_type').css("color", text);
       
    })
</script>

@endsection