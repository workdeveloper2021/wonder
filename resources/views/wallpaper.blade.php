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


  <!--second page start-->

  <div id="second_page">

    <div class="container">

        <div class="gal">

            <div class="row ">
                <div class="col-12">
                    <h2>WALLPAPERS</h2>
                </div>
           
            @if($product)
            @foreach($product as $key => $value)
                <div class="col-md-3 col-6">
                <a href="{{ URL::to('wallpaper-details') }}/{{ $value['id']}}">
                    <img class="img-fluid" src="{{ URL::to('/') }}/{{ $value['image']}}" alt="">

                    <p>{{ $value['title']}}</p>

                    <p>From : <strong>$ {{ $value['price']}}</strong></p>
                </a>  
                </div>
            @endforeach
            @endif

            </div>

        </div>
     



    </div>

</div>

<!-- second page dropdown start  -->

<div id="second_page_dropdown">

    <div class="container">

        <div class="last_sec">

            <div class="row">

                <div class="col-md-4 pagination">

                    <p>

                        <a href="#" style="font-size: 22px; margin-right: 10px;">1</a>

                        <a href="#" style="font-size: 22px; margin-right: 10px;">2</a>

                        <a href="#" style="font-size: 22px; margin-right: 10px;">3</a>

                        <a href="#" style="font-size: 22px; margin-right: 10px;"><img class="img-fluid" width="16%" src="{{ URL::to('assets/') }}/images/pagination_icon.png" alt=""></a>

                    </p>

                </div>

                <div class="col-md-4 product12" style="text-align: center;">

                    <a href="#">12 products</a>

                </div>

                <div class="col-md-4 second_page_filter" style="text-align: end;">

                    <div class="dropdown">

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">

                          Sort &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                      </button>

                      <div class="dropdown-menu">

                        <a class="dropdown-item" href="#">Link 1</a>

                        <a class="dropdown-item" href="#">Link 2</a>

                        <a class="dropdown-item" href="#">Link 3</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<!-- second page dropdown end  -->


@endsection