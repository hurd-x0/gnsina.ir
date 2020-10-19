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
	<title>ورود به حساب دوتا۲</title>
	<!--<link rel="stylesheet" href="styles.css">-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="Account">
                 <form action="engine/do-login.php" method="POST">
                        <div style="background-color:#41aaa2; height:800px; width:800px; border-radius:50px; text-align:center;" class="col-md-offset-4">
			<img src="image/shadow_fiend.png" class="img-rounded" alt="Cinque Terre" style="width:50%">
                        <h1 style="text-align:center; padding-top:10px; color:#ffffff;">فرم ورود </h1>

			<div class="col-sm-12" style="padding-top:10px;">
                        <!-----<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" style="border-radius:15px;">----->
                        <input type="text" class="input" id="Name" placeholder="نام شما ..." name="Name" style="border-radius:15px; color:#ffffff;">
                        </div>
                        <div class="col-sm-12" style="padding-top:10px;">
                        <!--<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" style="border-radius:15px;">-->
                        <input type="text" class="input" id="Surname" placeholder="نام خانوادگی شما..." name="Surname" style="border-radius:15px; color:#ffffff;">
                        </div>

			<button class="col-md-4 col-md-offset-4 btn" style="background-color:#626a69; color:#ffffff; font-size:15px; margin-top:30px; border-radius:15px;" type="submit">ورود به حساب<input name="do-login" value="ورود به حساب" class="col-md-4 col-md-offset-4 btn" style="background-color:#626a69; color:#ffffff; font-size:0px; margin-top:0px; border-radius:15px;" type="submit" >
                        </button>
		</form>
	</div>
</body>
</html>
