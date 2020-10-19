<?php
require_once 'engine/db.php';
if(isset($_SESSION['loggedin'])){
        header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ثبت حساب دوتا ۲</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	<div id="Account">
		 <form action="engine/do-register.php" method="POST">
		<div style="background-color:#41aaa2; height:800px; width:800px; border-radius:100px; text-align:center;" class="col-md-offset-4">
			<img src="image/shadow_fiend.png" class="img-rounded" alt="Cinque Terre" style="width:50%">
			<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Dota2 ثبت حساب </h1>

			<div class="col-sm-12" style="padding-top:10px;">
			<!-----<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" style="border-radius:15px;">----->
			<input type="text" class="input" id="Name" placeholder="نام شما ..." name="Name" style="border-radius:15px; color:#ffffff;">
			</div>
			<div class="col-sm-12" style="padding-top:10px;">
			<!--<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" style="border-radius:15px;">-->
    			<input type="text" class="input" id="Surname" placeholder="نام خانوادگی شما..." name="Surname" style="border-radius:15px; color:#ffffff;">
			</div>
			<!--<div class="col-sm-12" style="padding-top:10px;">
			<input type="date" class="input" id="Birthday" placeholder="تاریخ تولد..." name="Birthday of you" style="border-radius:15px; color:#ffffff;">
			</div> -->
			<div class="col-sm-12" style="padding-top:10px;">
			<!--<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius:15px;">-->
    			<input type="email" class="input" id="Email" placeholder="ایمیل شما ..." name="Email" style="border-radius:15px; color:#ffffff;">
			</div>
			<div class="col-sm-12" style="padding-top:10px;">
			<!--<input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile No." name="mobileno" style="border-radius:15px; color:#ffffff;">-->
    			<input type="text" class="input" id="Moblie" placeholder="شماره مبایل شما..." name="Mobile" style="border-radius:15px; color:#ffffff;">
			</div>
			<div class="col-sm-12" style="padding-top:10px;">
			<!--<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" style="border-radius:15px;">-->
    			<input type="text" class="input" id="Username" placeholder="نام کاربری شما..." name="Username" style="border-radius:15px; color:#ffffff;">
			</div>
			<div class="col-sm-12" style="padding-top:10px;">
			<input type="Password" class="input" id="Password" placeholder="رمز شما ..." name="Password" style="border-radius:15px; color:#ffffff;">
		 	</div>
			<div class="col-sm-12" style="padding-top:10px;">
                	<input type="date" class="input" id="Birthday" placeholder="تاریخ تولد..." name="Birthday" style="border-radius:15px; color:#ffffff;">
                	</div>
 			<button class="col-md-4 col-md-offset-4 btn" style="background-color:#626a69; color:#ffffff; font-size:20px; margin-top:50px; border-radius:15px;" type="submit">ثبت حساب <input name="do-register" value="ثبت" class="col-md-4 col-md-offset-4 btn" style="background-color:#626a69; color:#ffffff; font-size:0px; margin-top:0px;" "type="submit" >
			</button>
		</form>
 	</div>
</body>
</html>
