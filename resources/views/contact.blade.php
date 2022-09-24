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
  <!-- contact page start  -->

    <!--<div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>CONTACT</h2>
                    <form>
                        <label for="">NAME</label>
                        <input type="text">
                        <label for="">EMAIL</label>
                        <input type="email"><br>
                        <label for="">MESSAGE</label><br>
                        <textarea name="" id="" cols="" rows="6"></textarea> <br>
                        <a href="#">SEND <img src="assets/images/Layer 59.png" alt="" width="2%"> </a>
                        <br>
                    </form>
                    <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                </div>
            </div>
        </div>
    </div>-->
    <!-- contact page end  -->
    <!--Contact Wrapper Strat-->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 contact-heading">
                    <h2>CONTACT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 mb-5 wow animate__fadeIn" data-wow-duration="2s">
                    <div class="info">
                        <div class="address">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4>Location:</h4>
                            <p style="margin-bottom: 20px;">A108 Adam Street, Elizabeth Ave &, Meeker Ave, Newark, New York, United States, 535022</p>
                        </div>
                        <div class="email">
                            <i class="fas fa-envelope"></i>
                            <h4>Email:</h4>
                            <p style="margin-bottom: 20px;">info@example.com</p>
                        </div>
                        <div class="call">
                            <i class="fas fa-phone-alt"></i>
                            <h4>Call:</h4>
                            <p style="margin-bottom: 20px;">+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 wow animate__fadeIn" data-wow-duration="2s">
                    <div class="form">
                        <div class="form-row">
                            <div class="col-12 col-md-6 form-group">
                                <label>Your Name</label><br>
                                <input type="text">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Your Email</label>
                                <input type="email"><br>
                            </div>
                            <div class="col-12 form-group">
                                <label>Phone No.</label>
                                <input style="width: 100%;" type="text"><br>
                            </div>
                        </div>
                        <label>Message</label><br>
                        <textarea style="width: 100%; height: 200px;"></textarea><br>
                        <button class="button send-btn mb-5" type="btn">Send Message</button>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <!--Contact Wrapper End-->
@endsection