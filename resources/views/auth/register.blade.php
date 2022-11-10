@extends('layouts.main')
 <!--Banner Start-->
@section('content');
    <!--slip on all pages start-->

    <div id="slip" style="width: 100%;float: left;">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <img style="width:100%;height: auto;" src="{{ URL::to('assets/')}}/images/Whatsappimage.jpeg" alt="">

                </div>

            </div>

        </div>

    </div>

    

    

    <!--slip on all pages end-->

    <!--Sign up  Page Start-->

    <div id="sign_in">

            <div class="container special_class">

            <div class="row">

                <div class="col-12 head">

                    <h2>Register</h2>

                   <form class="login_form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <label>Name*</label><br>

                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                        <label>Mobile Number*</label><br>
                        <input id="contact" type="contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" minlength="10" maxlength="10"  onkeypress="return onlyNumberKey(event)">

                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       

                        <label>Email Address*</label><br>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>Password*</label><br>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label>Confirm Password*</label><br>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       <button type="submit">Sign Up</button>
                        
                        <label>Already log in?</label>

                        <a href="{{ route('login')}}" > Sign up</a>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!--Sign up  Page Start-->

        
<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
@endsection