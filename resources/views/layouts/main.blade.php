<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wonder Raelyn Prints</title>
   <!-- <title>wonder_raelyn_prints</title> -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
 @include('layouts.head')
</head>
<body>

	 <!--Header Start-->

	 @include('layouts.header')
	 <!--Header End-->

     @yield('content')
    <!--Footer Start-->
     @include('layouts.footer')
     @include('layouts.script')
    <!--Footer End-->

     @yield('script')
</body>



</html>