 <!--pre header start-->
<style type="text/css">
    
    .shopping-cart{
      margin: 20px 0 0;
      float: right;
      background: white;
      width: 320px;
      position: relative;
      border-radius: 3px;
      padding: 5px;
      }
      
  .shopping-cart-header{
    border-bottom: 1px solid #E8E8E8;
    padding-bottom: 15px;
    
   
  }
  
   .shopping-cart-total {
      float: right;
    }
  .shopping-cart-items {
    
    /*padding-top: 20px;*/
  }
      li {
        margin-bottom: 18px;
      }

   .shopping-cart-items img {
      float: left;
      width: 100%;
    }
    
    .item-name {
      display: block;
      font-size: 16px;
    }
    
    .item-price {
      color: $main-color;
      margin-right: 14px;
    }
    
    .item-quantity {
      color: $light-text;
    }
  
   

.shopping-cart:after {
    bottom: 100%;
    left: 89%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: white;
    border-width: 8px;
    margin-left: -8px;
}

.shopping-cart-items li{
    display: block;
}


.cart-btn .send-btn {
    margin: 0!important;
    display: block;
    background: #4d6b7c;
    border: 0;
    border-radius: 4px;
    color: #fff!important;
    padding: 10px 24px;
    outline: none;
    transition: 0.5s;
}
#collapsibleNavbar li.nav-item:nth-child(7) .dropdown-toggle::after ,#collapsibleNavbar li.nav-item:nth-child(8) .dropdown-toggle::after ,#collapsibleNavbar  li.nav-item:nth-child(9) .dropdown-toggle::after {
    display:none;
}   
</style>
    <div id="pre_header">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-12">

                    <div class="logo">

                        <a href="{{ URL::to('/') }}"><img class="img-fluid" width="50%" src="{{ URL::to('assets/') }}/images/Logo final.png" alt=""></a>

                    </div>

                </div>

                <!-- <div class="col-md-4 col-12 ml-auto">

                    <div class="head_icon">

                        
                        <a href="#"><i class="fas fa-search"></i></a>
                        <a href="#"><i class="fas fa-shopping-bag"></i></a>
                        <a href="#"><i class="fas fa-user-circle"></i></a>

                    </div>

                </div> -->

            </div>

        </div>

    </div>



    <!--pre header end-->













    <!--header start-->

    <div id="header">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <nav class="navbar navbar-expand-md">

                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-label="Toggle navigation">

                            <i class="fas fa-bars bar-icon"></i>

                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

                            <ul class="pt-2 navbar-nav  ml-auto">

                                <!--<li class="nav-item">

                                    <a class="nav-link" href="#">SHOP ALL</a>

                                </li>-->

                                <li class="nav-item">

                                    <div class="dropdown">

                                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">

                                    SHOP ALL

                                  </button>

                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="{{ URL::to('wall-decals')}}">WALL DECALS</a>

                                            <a class="dropdown-item" href="{{ URL::to('vector-walldecals')}}">VECTOR WALLDECALS</a>

                                            <a class="dropdown-item" href="{{ URL::to('wallpaper')}}">WALLPAPER</a>

                                            <a class="dropdown-item" href="{{ URL::to('prints')}}">PRINTS</a>

                                            <a class="dropdown-item" href="{{ URL::to('baby-cards')}}">BABY CARD</a>

                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" href="{{ URL::to('about-us')}}">ABOUT</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" href="{{ URL::to('shipping')}}">SHIPPING</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" href="{{ URL::to('faq')}}">FAQ'S</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" href="{{ URL::to('terms-conditions')}}">TERM & CONDITIONS</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" href="{{ URL::to('contact')}}">CONTACT US</a>

                                </li>

                                 <li class="nav-item drop_down_search">

                                    <div class="dropdown">

                                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown"><i class="fas fa-search"></i></button>

                                        <div class="dropdown-menu" style="padding: 0;">
                                            <form action="/action_page.php" style="width: 140%;">
                                            <div class="input-group" style="position: relative;">
                                              <input type="text" class="form-control" placeholder="Search" name="search">
                                              <a href="#"  style="z-index: 999;position: absolute;top:14%;right:3%;" ><i class="fas fa-search"></i></a>
                                            </div>
                                          </form>

                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item drop_down_bag">

                                    <div class="dropdown">

                                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-bag"></i></button>

                                        <div class="dropdown-menu">

                                            
                                            <div class="container">
                                              <div class="shopping-cart" style="width: 250px;">
                                                <!--end shopping-cart-header -->

                                                <ul class="shopping-cart-items">
                                                    <p style="font-weight: bold;" class="pb-4">Shopping Cart</p>
                                                  <li class="clearfix">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ URL::to('/') }}/assets/images/Wall Dec1.png" alt="item1" class="img-fluid" />
                                                        </div>
                                                        <div class="col-8" style="position: relative;">
                                                            <span class="item-name">WALL DECALS...</span>
                                                            <span class="item-price">$849.99</span>
                                                            <a href="#"><i class="fas fa-times" style="position: absolute; top: 0; right: 0; font-size: 12px; background: #4d6b7c; border-radius: 50%; padding: 5px ; color: #fff;" ></i></a>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="clearfix">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ URL::to('/') }}/assets/images/Wall Dec1.png" alt="item1" class="img-fluid" />
                                                        </div>
                                                        <div class="col-8" style="position: relative;">
                                                            <span class="item-name">WALL DECALS...</span>
                                                            <span class="item-price">$849.99</span>
                                                            <a href="#"><i class="fas fa-times" style="position: absolute; top: 0; right: 0; font-size: 12px; background: #4d6b7c; border-radius: 50%; padding: 5px ; color: #fff;" ></i></a>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="clearfix">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ URL::to('/') }}/assets/images/Wall Dec1.png" alt="item1" class="img-fluid" />
                                                        </div>
                                                        <div class="col-8" style="position: relative;">
                                                            <span class="item-name">WALL DECALS...</span>
                                                            <span class="item-price">$849.99</span>
                                                            <a href="#"><i class="fas fa-times" style="position: absolute; top: 0; right: 0; font-size: 12px; background: #4d6b7c; border-radius: 50%; padding: 5px ; color: #fff;" ></i></a>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="clearfix">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ URL::to('/') }}/assets/images/Wall Dec1.png" alt="item1" class="img-fluid" />
                                                        </div>
                                                        <div class="col-8" style="position: relative;">
                                                            <span class="item-name">WALL DECALS...</span>
                                                            <span class="item-price">$849.99</span>
                                                            <a href="#"><i class="fas fa-times" style="position: absolute; top: 0; right: 0; font-size: 12px; background: #4d6b7c; border-radius: 50%; padding: 5px ; color: #fff;" ></i></a>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="clearfix">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p style="text-align: center;font-weight: bold;" class="pb-2">Subtotal</p>
                                                        </div>
                                                        <div class="col-8 text-right">
                                                            <span class="item-price">$8490.00</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                </ul>
                                              </div> <!--end shopping-cart -->
                                              <div class="row">
                                                <div class="col-6">
                                                  <div class="cart-btn" style="text-align: center;margin: 0 auto;">
                                                    <button style="cursor: pointer; font-size: 14px; margin: 0 auto !important; display: block; background: #4d6b7c;width: 105%; border: 0; border-radius: 4px ; padding: 11px 12px; outline: none; transition: 0.5s;" class="button send-btn mb-5" type="btn">Checkout</button>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="cart-btn" style="text-align: center;margin: 0 auto;">
                                                    <button style="cursor: pointer; font-size: 14px; margin: 0 auto !important; display: block; background: #4d6b7c;width: 105%; border: 0; border-radius: 4px ; padding: 11px 12px; outline: none; transition: 0.5s;" class="button send-btn mb-5" type="btn">View Cart</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> <!--end container -->

                                        </div>

                                    </div>

                                </li>
                                
                                <li class="nav-item drop_down_bag">
                                    <div class="dropdown">
                                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-circle"></i></button>
                                        <div class="dropdown-menu">
                                            <div class="container">
                                              <div class="shopping-cart" style="width: 100%;margin: 0;">
                                                <!--end shopping-cart-header -->
                                                <ul class="shopping-cart-items">
                                                    @auth
                                                         <p><a href="{{ URL::to('dashboard') }}"><i class="fas fa-home"></i> Dashboard</a></p>
                                                         <p> <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                               <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span>
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                          
                                                    @endauth
                                                    @guest
                                                        <p><a href="{{ URL::to('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></p>
                                                    @endauth 
                                                   
                                                  
                                                </ul>
                                              </div> <!--end shopping-cart -->
                                        </div>
                                    </div>
                                </li>

                               



                            </ul>

                        </div>

                    </nav>

                </div>
                <div class="col-12 d-flex justify-content-center">
                    <li style="list-style-type: none;padding: 0 4%;" class="nav-item drop_down_search_m">
                        <a hjref="#"style="cursor: pointer; color: #4d6b7c; font-size: 20px; margin: 0; outline: none;"><i class="fas fa-search"></i></a>
    
                    </li>
    
                    <li  style="list-style-type: none;padding: 0 4%;"  class="nav-item drop_down_bag_m">
                        <div class="" style="position: relative;">
                            <a href="#"  style="cursor: pointer; color: #4d6b7c; font-size: 20px; margin: 0; outline: none;" ><i class="fas fa-shopping-bag"></i></a>
                            <span class="badge" style="position: absolute; top: -32%; right: -103%; padding: 3px 6px ; border-radius: 50%; background-color: #4d6b7c; color: white;">3</span>
                        </div>
                    </li>
    
                    <li  style="list-style-type: none;padding: 0 4%;"  class="nav-item  drop_down_user_m">
    
                        <a href="#" style="cursor: pointer; color: #4d6b7c; font-size: 20px; margin: 0; outline: none;" ><i class="fas fa-user-circle"></i></a>
    
                    </li>
                
                </div>

            </div>

        </div>

    </div>



    <!--header end-->

