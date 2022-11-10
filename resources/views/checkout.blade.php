@extends('layouts.main')
 <!--Banner Start-->
@section('content');


    <!-- Start main Section -->

    <div style="    padding-top: 78px;">

        <div class="container">

            <div class="row">

                <!-- Start first main col-md-6 -->

                <div class="col-md-6">

                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Cart</a></li>
                            <li class="breadcrumb-item"><a href="#">Information</a></li>
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payment</li>
                        </ol>
                    </nav> -->

                    <!-- <fieldset>
                        <legend class="text-center">Express checkout</legend>

                        <div class="row">
                            <div class="col-4">
                                <span class="express_icon btn btn-primary"><img src="{{ URL::to('assets/')}}/images/shop-pay.png" width="100%"></span>
                            </div>
                            <div class="col-4">
                                <span class="express_icon btn btn-warning"><img src="{{ URL::to('assets/')}}/images/paypal.png" width="100%"></span>
                            </div>
                            <div class="col-4">
                                <span class="express_icon btn btn-dark"><img src="{{ URL::to('assets/')}}/images/gpay.png" width="100%"></span>
                            </div>
                        </div>

                        <span class="express_icon btn btn-primary"><i class="fab fa-google-pay"></i></span>
                            <span class="express_icon btn btn-warning"><i class="fab fa-paypal"></i></span>
                            <span class="express_icon btn btn-dark"><i class="fab fa-google-pay"></i></span>

                    </fieldset>

                    <h6><span>OR</span></h6> -->

                    <!-- Start Contact Information Section -->
                <form method="post" action="{{ route('orderplace') }}">
                    @csrf 
                    <div class="contact-information">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Contact Information </h4>
                            </div>
                            <div class="col-md-6">
                                <h5 class="span2">Already have an account? <a href="{{ route('login') }}">Log in</a></h5>
                            </div>
                        </div>
                      
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" value="<?php if(Auth::user()){ echo Auth::user()->email; } ?>" placeholder="Email" required>
                            </div>
                            <input type="checkbox" name="" id=""> Keep me up to date on news and offers

                            <h4 style="margin-top: 30px;">Shipping address</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="from-group mb-2">
                                        <input type="text" name="s_fname" class="form-control form-control-lg" placeholder="First name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from-group mb-2">
                                        <input type="text" name="s_lname" class="form-control form-control-lg" placeholder="Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="from-group mb-2">
                                        <input type="tel" name="s_contact" class="form-control form-control-lg" placeholder="Contact No." required  onkeypress='validate(event)' >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="s_cumpany" class="form-control form-control-lg" placeholder="Company (optional)">
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="address" class="form-control form-control-lg" placeholder="Address" required>
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="address2" class="form-control form-control-lg" placeholder="Apartment, suite, etc. (optional)">
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="address3" class="form-control form-control-lg" placeholder="Suburb">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <div class="select-wrap">
                                            <label>Country/region</label>
                                            <select class="form-control-lg" name="country" id="country" style="width: 100%;" required>
                                            @if($countries)
                                            @foreach($countries as $value)    
                                                <option <?php if ($value->id == 101): ?> selected
                                                    
                                                <?php endif ?> value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                            @endif    
                                            
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <div class="select-wrap">
                                            <label>State/territory</label>
                                            <select class="form-control-lg" name="state" id="state" style="width: 100%;" required>
                                                <option value="">State/territory</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                         <label>Postcode</label>
                                        <input type="text" name="pincode" class="form-control form-control-lg" placeholder="Postcode" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" name="submit" class="btn btn-lg btn-dark" style="">Continue to shipping</button>
                                <a href="{{ URL::to('/cart') }}" class="reset_link" style="">Return to cart</a>
                            </div>



                    </div>

                    <!-- End Contact Information Section -->

                </div>

                <!-- End first main col-md-6 -->


                <!-- Start Second main col-md-6 -->

                <div class="col-md-6">

                    <div class="container">
                     <?php 
                     $carttotal = 0;
                     if(count($cart) > 0) {
                        foreach ($cart as $key => $product) {
                         $carttotal += $product['price'];
                     ?>     
                        <div class="row">
                            <div class="col-2">
                                <?php if($product['product_type'] =='print'){ ?>
                                <img src="{{ URL::to('/') }}/image/printtext.jpg" alt="item1" class="img-fluid" />
                                <?php }else{ ?>
                                <img src="{{ URL::to('/') }}/{{ $product['products']['image']}}" alt="item1" class="img-fluid" />
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <h5 style="margin-bottom: 0;font-size: 14px;">{{ substr($product['products']['title'], 0,20) }}...</h5>
                                <!-- <small>Cluster</small> -->
                            </div>
                            <div class="col-4">
                                <h5 style="font-size:20px;">${{ number_format( $product['price'],2)}}</h5>
                            </div>
                        </div><br>
               
                <?php } }else{ ?>  
                <?php } ?>
                        <hr style="margin: 30px 0;">

                    
                            <div class="form-row align-items-center">
                              
                                <div class="col-md-10">
                                    <input type="text" class=" mt-2 form-control form-control-lg" name="giftcode" id="giftcode" placeholder="Gift card or discount code"></div>
                                <div class="col-md-2">
                                    <div class="input-group mt-2">
                                        <button type="button" id="giftcodeapp" class="btn btn-light btn-lg">Apply</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                        <hr style="margin: 30px 0;">

                        <div class="row">
                            <div class="col-6">
                                <p class="subtotal">Subtotal</p>
                            </div>
                            <div class="col-6">
                                <p class="text-right">${{ number_format( $carttotal ,2)}}</p>
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
                                <!-- <p>Including $21.82 in taxes</p> -->
                            </div>
                            <div class="col-6">
                                <p class="text-right">
                                    <!-- <span>AUD</span> -->
                                    <span style="font-size: 30px;"> ${{ number_format( $carttotal ,2)}}</span>
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


@endsection

@section('script')

<script type="text/javascript">
$(document).ready(function(){
    $('#country').trigger('change');
})
$(document).on('change','#country',function(e){
        e.preventDefault();
        var country_id = $(this).val();
            $.ajax({
                type: "get",
                contentType: 'application/json',
                "url": "{{ route('state-list') }}",
                data:{country_id: country_id},
                success: function (res) {
                    console.log(res);
                    $('#state').html('');
                    if (res) {
                        var states = res;
                        $.each(states, function () {
                            $("#state").append('<option value="' + this.id + '">' + this.name + '</option>');
                        });
                    } else {
                        $("#state").append('<option value="">Select state</option>');
                    }
                    getCityFn();
                },
                error: function (error) {
                    console.log(error);
                }
            });
    })   

    function validate(evt) {
      var theEvent = evt || window.event;

      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }

    $(document).on('click','#giftcodeapp',function(){
        var code = $('#giftcode').val();
        var amt = "{{$carttotal}}";
        $.ajax({
            url:"{{route('applygiftcard')}}",
            type:'get',
            data:{code:code,amt:amt},
            success:function(res){
                alert(res);
            }
        })
    }) 

</script>

@endsection