<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Company Registration</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Camp Registration Form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- //css files -->
</head>
<body>
<div class="header">
  <a href="#default" class="logo">Campus Recruitment System</a>
  <div class="header-right">
    <a  href="../index.html">Home</a>
    <a href="../index.html#contact">Contact</a>
    <a href="../index.html#about">About</a>
	 <a href="../login/login.php">Login</a>
	
  </div>
</div>

<div class="w3l-main">
	<div class="w3l-from">
		<form action="addcompany.php" method="post" id="myform">	
			<div class="w3l-details1">
				<div class="w3l-num">
					<label class="head">Company Name<span class="w3l-star"> * </span></label>
				<input type="text" name="cname" placeholder="" pattern="[a-zA-Z0-9 ]+" required="" autocomplete="off">
				</div>
				<div class="w3l-sym">
					<label class="head">Head Office<span class="w3l-star"> * </span></label>
						    
							
				<input type="text" name="address" pattern="[a-zA-Z]+" placeholder="" required="" autocomplete="off">
						</div>
					</div>	
			
			<div class="clear"></div>
			<div class="w3l-details1">
				<div class="w3l-num">
				<label class="head">State<span class="w3l-star"> * </span></label>
				<input type="text" name="state" pattern="[a-zA-Z ]+" placeholder="" required="" autocomplete="off">
					
					
				</div>
				<div class="w3l-sym">
			<label class="head">Website<span class="w3l-star"> * </span></label>	
			<input type="text" name="website"  pattern="[a-zA-Z0-9.]+" placeholder="" id="website" required="" autocomplete="off">	
			</div>
			<div class="clear"></div>
			<div class="w3l-num">
				<label class="head">Mobile No<span class="w3l-star"> * </span></label>	
					<input type="text"  minlength="10" maxlength="10"  name="mobno" placeholder="" required="" autocomplete="off">
			</div>
			<div class="w3l-sym">
			<label class="head">Email<span class="w3l-star"> * </span></label>	
			<input type="email"  name="email" placeholder="" id="email" required="" autocomplete="off">	
			</div>
			<div class="clear"></div>
			</div>
			
			<div class="w3l-num">
					<label class="head">Password<span class="w3l-star"> * </span></label>
					<input type="text"  id="txtNewPassword" name="password" placeholder="" required="" autocomplete="off" >
				</div>
			<div class="w3l-sym">
					<label class="head">Confirm Password<span class="w3l-star"> * </span></label>
					<input type="text" id="txtConfirmPassword" name="conpass" placeholder="" required="" autocomplete="off">
			</div>
			<div class="clear"></div>
			
			<div class="clear"></div>
			
				<div class="btn">
					<input type="submit" name="submit" value="Submit"/>
				</div>
				<div class="registrationFormAlert" style="color:white;" id="CheckPasswordMatch">
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>
	
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(document).ready(function () {
      var currentDate = new Date();
      $('.date').datepicker({
      format: 'dd/mm/yyyy',
      autoclose:true,
      endDate: "currentDate",
      maxDate: currentDate
      }).on('changeDate', function (ev) {
         $(this).datepicker('hide');
      });
      $('.date').keyup(function () {
         if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
         }
      });
   });
   </script>
   <script>
  function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
	</script>
	
<!-- //Calendar -->

</body>
</html>