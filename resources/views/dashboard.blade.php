@extends('layouts.main')
<!--Banner Start-->
@section('content');
<!--Header End-->
  <style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #DFE9EA;
  width: 20%;
  height: auto;
  padding: 50px 0;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: #000;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #4d6b7c61;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #4d6b7c61;
}

/* Style the tab content */
.tabcontent {
  padding: 50px 0 50px 2% !important;
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
  height: auto;
}
.tabcontent h3{
    padding-bottom: 10px;
}
.bio-row {
width: 100%;
float: left;
margin-bottom: 10px;
padding:0 15px;
}

#Paris{
    float: left;
    padding: 50px 0;
}
#Paris .head h2{
    color: #4d6b7c;
    font-size: 36px;
    font-weight: 700;
    text-transform: capitalize;
    padding-bottom: 12px;
    margin-bottom: 12px;
}
#Paris .login_form{
    text-align : left;
    width: 100%;
}
#Paris .login_form input{
    border: 1px solid #00000029;
    padding: 0.375rem 0.75rem ;
    outline: none;
    width: 90%;
    margin-bottom: 10px;
    border-radius: 7px;
}
#Paris .login_form input:hover{
    border: 1px solid #4d6b7c8f;
}
#Paris .login_form button{
    margin: 10px 0;
    display: block;
    background: #4d6b7c;
    border: 0;
    border-radius: 4px;
    color: #fff;
    padding: 10px 24px;
    outline: none;
}
#Paris .login_form button:hover{
    background-color: #4d6b7c8f;
    transition: 1s;
}
#Paris .login_form a{
    color:#0056b3;
}
.quick_view{
    font-size: 14px;
    border: 2px solid #4d6b7c;
    background-color: #fff;
    color: #666;
    outline: 0;
    font-family: inherit;
    border-radius: 6px;
    font-weight: 600;
    padding:7px 11px;
}
.add_to_cart{
    font-size: 14px;
    border: 2px solid #4d6b7c;
    background-color: #4d6b7c;
    color: #fff;
    outline: 0;
    font-family: inherit;
    border-radius: 6px;
    padding:7px 11px;
    font-weight: 600;
    
    
}
.quick_view:hover{
    background-color: #4d6b7c;
    color: #fff;
    transition: .5s;
}
.add_to_cart:hover{
    background-color: #fff;
    border: 2px solid #4d6b7c;
    color: #4d6b7c;
    transition: .5s;
}
/*Sign in  page css End*/
</style>
<!--slip on all pages start-->
<div id="slip" style="width: 100%;float: left;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img style="width:100%;height: auto;" src="{{URL::to('/')}}/images/Whatsappimage.jpeg" alt="">
            </div>
        </div>
    </div>
</div>
<!--slip on all pages end-->
<!-- vertical tabs start-->
<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London')"  id="defaultOpen" >Profile</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Account details</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')" >Wishlist</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')"><a href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">Logout</span>
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form></button>
</div>

<div id="London" class="tabcontent">
    <p class="greeting">
        Hello
        <span class="text-dark font-weight-bold">{{$user->name}}</span>
    </p>

    <p class="mb-4">
        
    </p>
    <h3><i class="fas fa-user"></i> Profile</h3>
    <div class="row">
        <div class="bio-row">
            <p><span>Name &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; </span> {{$user->name}}</p>
        </div>
       
        <div class="bio-row">
            <p><span>Mobile  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp;  </span>{{$user->contact}}</p>
        </div>
        <div class="bio-row">
            <p><span>Email Address    &nbsp;  &nbsp;</span> {{$user->email}}</p>
        </div>
    </div>
</div>

<div id="Paris" class="tabcontent">
    <h3> <i class="fas fa-user-circle"></i> Account Details</h3>
    
   
    <!-- form updation start -->
    <form class="form account-details-form" id="update_profile" action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">name *</label>
                    <input type="text" id="firstname" value="{{$user->name}}" name="first_name" placeholder="John"
                    class="form-control form-control-md" required>
                </div>
            </div>
             <div class="form-group mb-6">
        <label for="email_1">Email address *</label>
        <input type="email" id="email_1" class="form-control form-control-md" value="{{$user->email}}" readonly>
    </div>
           
        </div>

    <!-- <div class="form-group mb-3">
        <label for="display-name">Display name *</label>
        <input type="text" id="display-name" name="display_name" placeholder="John Doe"
            class="form-control form-control-md mb-0">
        <p>This will be how your name will be displayed in the account section and in reviews</p>
    </div> -->

   
    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
</form>
<form class="form account-details-form" id="password_change" action="" method="post">  
    <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
    <div class="form-group">
        <label class="text-dark" for="cur-password">Current Password leave blank to leave unchanged</label>
        <input type="password" class="form-control form-control-md"
        id="cur-password" name="cur_password" required>
    </div>
    <div class="form-group">
        <label class="text-dark" for="new-password">New Password leave blank to leave unchanged</label>
        <input type="password" class="form-control form-control-md"
        name="password" id="password" required>
    </div>
    <div class="form-group mb-10">
        <label class="text-dark" for="conf-password">Confirm Password</label>
        <input type="password" class="form-control form-control-md"
        id="conf-password" name="password_confirm" required>
    </div>
    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Submit</button>
</form>
</div>

<div id="Tokyo" class="tabcontent">
    <h3> <i class="fas fa-shopping-bag"></i> My Wishlist</h3>
    <div class="row pb-2">
        <div class="col-md-3">
            <h5>Product</h5>
        </div>
        <div class="col-md-3">
            <h5>Price </h5>
            
        </div>
        <div class="col-md-3">
            <h5>Stock Status</h5>
        </div>
        <div class="col-md-3">
            <h5>Actions</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="{{URL::to('/')}}/assets/images/Wall Dec1.png" width="40%" alt="item1" class="img-fluid" />
        </div>
        <div class="col-md-3">
            <h5>$12.00 AUD </h5>
            
        </div>
        <div class="col-md-3">
            <p>In Stock</p>
        </div>
        <div class="col-md-3">
            <a href="#" class="quick_view">Quick view</a>
            <a href="#" class="add_to_cart">Add to cart</a>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-3">
            <img src="{{URL::to('/')}}/assets/images/Wall Dec1.png" width="40%" alt="item1" class="img-fluid" />
        </div>
        <div class="col-md-3">
            <h5>$12.00 AUD </h5>
            
        </div>
        <div class="col-md-3">
            <p>In Stock</p>
        </div>
        <div class="col-md-3">
            <a href="#" class="quick_view">Quick view</a>
            <a href="#" class="add_to_cart">Add to cart</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="{{URL::to('/')}}/assets/images/Wall Dec1.png" width="40%" alt="item1" class="img-fluid" />
        </div>
        <div class="col-md-3">
            <h5>$12.00 AUD </h5>
            
        </div>
        <div class="col-md-3">
            <p>In Stock</p>
        </div>
        <div class="col-md-3">
            <a href="#" class="quick_view">Quick view</a>
            <a href="#" class="add_to_cart">Add to cart</a>
        </div>
    </div>
</div>
<!-- vertical tabs end-->

<!--Footer Start-->


@endsection


@section('script')

<!--Footer End-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">
            $('#update_profile').validate({
                rules:{ 
                    first_name:{
                      required:true,
                    },
                    last_name:{
                        required : true, 
                    },
                    
                   
                   
                },
                messages:{
                first_name:{
                    required: '<span style="color:red">Enter Your First Name</span>',
                }, 
                last_name:{
                    required: '<span style="color:red">Enter Your Last Name</span>',
                }, 
                
               
              
             },
         });

          $('#password_change').validate({
                rules:{ 
                    cur_password:{
                      required:true,
                    },
                    last_name:{
                        required : true, 
                    },
                    password :{
                      required : true,
                      minlength : 6,
                    },
                    password_confirm : {
                        required : true,
                        minlength : 6,
                        equalTo : "#password"
                    },
                   
                },
                messages:{
                
                cur_password:{
                    required: '<span style="color:red">Enter Your Current Password</span>',
                }, 
                
                password:{
                    required: '<span style="color:red">Enter Your Password</span>',
                    minlength : '<span style="color:red">Enter Your Password min 6</span>',
                    
                },
                password_confirm:{
                  required: '<span style="color:red">Enter Confirm Password</span>',
                  minlength : '<span style="color:red">Enter Password To Confirm</span>',
                    equalTo :'<span style="color:red">Confirm Password Did Not Match With Password</span>',
                    
                },
              
             },
         });
   

           
        </script>
@endsection