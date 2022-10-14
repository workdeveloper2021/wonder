@extends('layouts.main')
<!--Banner Start-->
@section('content');


<!-- Start main Section -->

<div style="    padding-top: 78px;">

    <div class="container">

        <div class="row">

            <!-- Start first main col-md-6 -->

                <div class="col-md-12">
                <h3>Shopping Cart</h3><br>
                <div class="row">
                    <div class="col-2">
                        <h5>Image</h5><br>
                    </div>
                    <div class="col-4">
                        <h5>Product Name</h5><br>
                    </div>
                    <div class="col-2">
                        <h5>Quntity</h5><br>
                    </div>

                    <div class="col-2">
                        <h5>Unit Price</h5><br>
                    </div>

                    <div class="col-2">
                        <h5>Total Price</h5><br>
                    </div>
                </div>
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
                            <div class="col-4">
                                <h5 style="margin-bottom: 0;font-size: 14px;">{{ substr($product['products']['title'], 0,20) }}...</h5>
                                <!-- <small>Cluster</small> -->
                            </div>
                             <div class="col-2">
                                <h5>{{$product['qty']}}</h5>
                            </div>

                            <div class="col-2">
                                <h5>${{ number_format( $product['unit_price'],2)}}</h5>
                            </div>
                            <div class="col-2">
                                <h5 style="font-size:20px;">${{ number_format($product['price'],2)}}</h5>
                                 <a href="{{ URL::to('/deletecart')}}/{{$product['id'] }}"><i class="fas fa-times" style="position: absolute; top: 0; right: 0; font-size: 12px; background: #4d6b7c; border-radius: 50%; padding: 5px ; color: #fff;"></i></a>
                            </div>
                        </div><br>
                        
                    <?php } }else{ ?>  
                        <div class="row">
                            <img src="{{ URL::to('assets/')}}/images/cart.png" width="600">
                        </div>
                    <?php } ?>


                    

                    <!-- End Contact Information Section -->
                <br>
                </div>

                <!-- End first main col-md-6 -->


                <!-- Start Second main col-md-6 -->

                <div class="col-md-6">
                </div>

                <div class="col-md-6">

                    <div class="container">
                   <!--  <div class="form-row align-items-center">
                        <div class="col-md-10">
                            <input type="text" class=" mt-2 form-control form-control-lg" placeholder="Gift card or discount code"></div>
                            <div class="col-md-2">
                                <div class="input-group mt-2">
                                    <button type="submit" class="btn btn-light btn-lg">Apply</button>
                                </div>
                            </div>
                        </div>

                        <hr style="margin: 30px 0;"> -->

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
                        <div class="form-group mt-4">
                                <a href="{{ URL::to('checkout') }}" name="submit" class="btn btn-lg btn-dark" style="">Continue to Checkout</a>
                                <a href="{{ URL::to('/') }}" class="reset_link" style="">Return to home</a>
                            </div>


                    </div>

                </div>


                <!-- End Second main col-md-6 -->


            </form>
        </div>

    </div>

</div>

<!-- End main Section -->


@endsection

@section('script')

<script type="text/javascript">
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
</script>

@endsection