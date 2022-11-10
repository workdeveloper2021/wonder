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

        <!--Login Page Start-->

        <div id="login">

            <div class="container special_class">

                <div class="row">

                    <div class="col-12 head">

                        <h2>{{ __('Confirm Password') }}</h2>
                        {{ __('Please confirm your password before continuing.') }}

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!--Login Page End-->


@endsection