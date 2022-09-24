<!DOCTYPE html>



<html lang="en">







<head>



    <meta charset="UTF-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Register</title>



    <!-- <title>wonder_raelyn_prints</title> -->



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <?php include('include/head.php'); ?>



</head>







<body>

   <!--Header Start-->

   <?php include('include/header.php'); ?>

   <!--Header End-->

    <!--slip on all pages start-->

    <div id="slip" style="width: 100%;float: left;">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <img style="width:100%;height: auto;" src="<?= base_url('assets/') ?>images/Whatsappimage.jpeg" alt="">

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
                    <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger">
                          <?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>
                   <form class="login_form" action="<?= base_url('web-signup') ?>" id="user_signup" method="post">

						<label>First Name*</label><br>

						<input type="text" placeholder="First Name" name="first_name"><br>

						<label>Last Name*</label><br>

						<input type="text" placeholder="Last Name" name="last_name"><br>

						<label>Mobile Number*</label><br>

						<input type="tel" placeholder="Mobile Number" minlength="10" maxlength="10"  onkeypress="return onlyNumberKey(event)" name="contact" id="contact"><br>

						<label>Email Address*</label><br>

						<input type="email" placeholder="example@gmail.com" id="email" name="email"><br>

						<label>Password*</label><br>

						<input type="password" name="password" id="password" placeholder="Password"><br>

						<label>Confirm Password*</label><br>

						<input type="password" name="password_confirm" placeholder="Confirm Password"><br>
                        
						<button type="submit" >Sign Up</button>
                        
                        <label>Already log in?</label>

    					<a href="<?= base_url('login'); ?>" > Sign up</a>

					</form>

                </div>

			</div>

		</div>

	</div>

	<!--Sign up  Page Start-->

		

    <!--Footer Start-->

    <?php include('include/footer.php') ?>

    <?php include('include/script.php') ?>
    
    <!--Footer End-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#user_signup').validate({
                rules:{ 
                    first_name:{
                      required:true,
                    },
                    last_name:{
                        required : true, 
                    },
                    
                    email:{
                        required : true,
                        email : true,
                        remote: {
                             url: "<?= base_url().'Welcome/register_email_exists' ?>",
                            type: "post",
                            data: { email: function(){ return $("#email").val(); } }
                        }
                    },
                    contact:{ 
                        required : true,
                        number:true,
                        minlength:10,
                        maxlength:10,
                        remote: {
                        url: "<?= base_url().'Welcome/mobile_no_exists' ?>",
                            type: "post",
                            data: { contact: function(){ return $("#contact").val(); } }
                           }
                
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
                first_name:{
                    required: '<span style="color:red">Enter Your First Name</span>',
                }, 
                last_name:{
                    required: '<span style="color:red">Enter Your Last Name</span>',
                }, 
                
                email:{
                    required:'<span style="color:red">Please Enter Email Address</span>',
                    email:'<span style="color:red">Please Enter Valid Email Address</span>',
                    remote:'<span style="color:red">This Email Address Is Already Registered</span>',
                },
                contact:{
                    required:'<span style="color:red">Please Enter Contact Number</span>',
                    number:'<span style="color:red">Please Enter Valid Contact Number</span>',
                    minlength:'<span style="color:red">Please Enter Valid Contact Number</span>',
                    maxlength:'<span style="color:red">Please Enter Valid Contact Number</span>',
                    remote:'<span style="color:red">This Contact Number Is Already Registered</span>',
                    
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
        <script>
            function onlyNumberKey(evt) {
                  
                // Only ASCII character in that range allowed
                var ASCIICode = (evt.which) ? evt.which : evt.keyCode
                if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                    return false;
                return true;
            }
        </script>



</body>







</html>