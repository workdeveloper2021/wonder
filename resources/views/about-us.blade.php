@extends('layouts.main')
 <!--Banner Start-->
@section('content');
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
    

    <!-- Shipping guide start  -->

    <div id="about_us">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <h2>ABOUT US</h2>
    
                   

                </div>

            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="about_img">
                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_dis">
                        <h4>A WORD FROM SUMMER DANIELS...</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.
                        </p>
                        <br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row pt-5">

                
                <div class="col-md-6">
                    <div class="about_dis">
                        <h4>A WORD FROM SUMMER DANIELS...</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.
                        </p>
                        <br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_img">
                        <img class="img-fluid" src="{{ URL::to('assets/') }}/images/Wall Dec1.png" alt="">
                    </div>
                </div>

            </div>
            

        </div>

    </div>

    <!-- Shipping guide end  -->
@endsection