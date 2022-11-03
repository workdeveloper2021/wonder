@extends('layouts.main')
 <!--Banner Start-->
@section('content');
 <div id="banner">

    <div class="container-fluid">

        <div class="row"> 

            <div class="col-12">

                <img src="{{ URL::to('assets/') }}/images/Images.png" alt="">

                <div class="on_banner">

                    <h2>WALL DECALS</h2>

                    <p>WALL STICKERS . REMOVOABLE WALL DECALS . STICK WALPAPER EASY PEEL NO DAMAGE</p>



                    <div class="banner_shopnow_button" onclick="location.href='{{ URL::to('wall-decals') }}';" style="cursor: pointer;">


                           
                        <img style="z-index: -998;" class="img-fluid" src="{{ URL::to('assets/') }}/images/SHOPNOW.png" alt="shop_now_img">

                        <!-- <p style="margin-top: 4%;"><a style="z-index: 999 !important;color: black;font-size: 13px;" href="#">SHOP NOW</a></p> -->



                    </div>

                </div>

                <div class="hide">

                    <h2>WALL DECALS</h2>

                    <p>WALL STICKERS . REMOVOABLE WALL DECALS . STICK WALPAPER EASY PEEL NO DAMAGE</p>

                        <!-- <div class="circle_img">

                            SHOP NOW

                        </div> -->

                    </div>

                </div>

            </div>

        </div>

    </div>







    <!--Banner End-->







    <!--Banner bottom text Start-->







    <div id="banner_btm_txt">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <p style="font-size: 16px;">Lovely Stickers . Lovely warmth . Lovely colours . Love creation in different level</p>



                </div>

            </div>

        </div>

        <!--<hr style="width: 100%; height: 0.1px;background-color: black;">-->

    </div>





    <!--Banner bottom text Start-->





    <!-- First image gallry start  -->

    <div id="first_img_gal">

        <div class="container">

            <div class="row">
            
                <div class="div_col">
                <a href="{{ URL::to('wall-decals') }}"> 
                    <div class="img">

                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/wall decals image1.png" alt="">

                        <div class="txt_on_img">

                            <p>WALL DECALS</p>

                        </div>

                    </div>
                </a>
                </div>

                <div class="div_col">
                <a href="{{ URL::to('vector-walldecals') }}">
                    <div class="img">

                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Vector wall decals images1.png" alt="">

                        <div class="txt_on_img">

                            <p>VECTOR WALL DECALS</p>

                        </div>

                    </div>
                </a>
                </div>

                <div class="div_col">
                <a href="{{ URL::to('wallpaper'); }} ">
                    <div class="img">

                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/wall decals image1.png" alt="">

                        <div class="txt_on_img">

                            <p>WALLPAPER</p>

                        </div>

                    </div>
                </a>
                </div>

                <div class="div_col">
                 <a href="{{ URL::to('prints'); }}">
                    <div class="img">

                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/PRINT SHOP IMAGE1.png" alt="">

                        <div class="txt_on_img">

                            <p>PRINT SHOP</p>

                        </div>

                    </div>
                </a>  
                </div>

                <div class="div_col">
                <a href="{{ URL::to('baby-cards') }}"> 
                    <div class="img">

                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/BIRTHDAY CARD1.png" alt="">

                        <div class="txt_on_img">

                            <p>BIRTHDAY CARDS</p>

                        </div>

                    </div>
                </a>
                </div>

            </div>

        </div>

    </div>





    <!-- First image gallry start  -->



    <!--Second banner start-->



    <div id="socond_banner">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Images BK.png" alt="">

                    <div class="on_banner">

                        <p class="second_txt" sytle="font-family: 'Palanquin', sans-serif;">Remarkable Handprinted Wall Decals and Prints Showcasing Australian Native Flowers</p>



                    </div>

                    <div class="second_shopnow_button" onclick="location.href='{{ URL::to('wall-decals') }}';" style="cursor: pointer;">



                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/SHOPNOW.png" alt="">



                    </div>

                    <!--<div class="hide">-->

                        <!--    <p sytle="font-family: 'Palanquin', sans-serif;">Remarkable Handprinted Wall Decals and Prints Showcasing Australian Native Flowers</p>-->

                        <!--</div>-->

                    </div>

                </div>

            </div>

        </div>



        <!--Second banner end-->



        <!--second image gallary start -->



        <div id="second_img_gal">

            <div class="container">

                <div class="row">
            @if($product)
            @foreach($product as $pro)
                    <div class="div_col">
                    <a href="{{ URL::to('baby-cards-details') }}/{{ $pro['id']}}">
                        <div class="img">

                            <img class="img-fluid" src="{{ URL::to('/') }}/{{ $pro['image']}}" alt="" style="    height: 190px; width: 100%">

                        <!-- <div class="shop_on_img">

                            <div class="shop">

                                <p>SHOP NOW</p>

                            </div>

                        </div> -->

                        <div class="txt_after_img">

                            <p>{{ $pro['title']}}</p>

                            <p>From : <strong>$ {{ $pro['price']}}</strong></p>

                        </div>

                    </div>
                    </a>

                </div>

            @endforeach
            @endif


            </div>

        </div>

    </div>






    <!--second image gallary end -->

    <!--parallax banner start -->

    <div id="parallax_banner">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <div class="parallax" style=" background-image: url('{{ URL::to('assets/') }}/images/Backgorund.png');">

                        <div class="on_banner">

                            <p>MEET THE FOUNDER</p>

                            <h5>THE WONDERWALL RAELYN PRINTS STORY</h5>

                            <p>“Inspiring dreams is at the heart of my brand - creating a <br> childhood filled with wonderment.”</p>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--parallax banner end -->

    <!--last banner start-->



    <!--<div id="last_banner">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <img src="{{ URL::to('assets/') }}/images/Backgorund.png" alt="image">

                    <div class="on_banner">

                        <p>MEET THE FOUNDER</p>

                        <p>THE WONDERWALL RAELYN PRINTS</p>

                        <p>STORY</p>

                        <p>“Inspiring dreams is at the heart of my brand - creating a <br> childhood filled with wonderment.”</p>

                        <br>

                        <p>Copyright © 2021 WONDERWALL RAELYN PRINT</p>

                        <p>Sright Removable wall decals australia </p>

                        <p>Kids Wall Stickers & Decals Australia</p>

                    </div>

                    <div class="hide">

                        <p>MEET THE FOUNDER</p>

                        <p>THE WONDERWALL RAELYN PRINTS</p>

                        <p>STORY</p>

                        <p>“Inspiring dreams is at the heart of my brand - creating a <br> childhood filled with wonderment.”</p>

                        <p>Copyright © 2021 WONDERWALL RAELYN PRINT</p>

                        <p>Sright Removable wall decals australia </p>

                        <p>Kids Wall Stickers & Decals Australia</p>

                    </div>

                </div>

            </div>

        </div>

    </div>-->





    <!--last banner end-->
@endsection