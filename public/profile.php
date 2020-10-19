<?php
require_once 'engine/db.php';
if(!isset($_SESSION['loggedin'])){
	header('Location: login.php');
}
$Surname = $_SESSION['loggedin'];
$sql = mysqli_query($db, "SELECT * FROM Account WHERE Surname='$Surname'");
$fetch = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>

<title> پروفایل اطلاعات دوتا۲</title>

<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2);
  max-width: 450px;
  margin: auto;
  //background-color: #127b96;
  //background-color: #3490dc;
  background-color: #b1e27d;
  text-align: center;
  font-family: arial;
}

.title {
  color: gray;
  //background-color: #b0c4de;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  //background-color: #454d5d;
  background-color #3490dc;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: gray;
}

button:hover,
a:hover {
  opacity: 0.6;
}
</style>
</head>
<body>

<!--<h1 style="text-align:center">اطلاعات کاربر</h1> -->

<div class="card">
  <!-- <h2 style="text-align:center">پرفایل کاربری</h2> -->
  <!-- <img src="image/Dota2-icon.png" style="width:100%"> -->
   <img src="image/dota-2-logo.jpg" class="img-rounded" alt="Cinque Terre" style="width:100%">
    <h2>نام خانوادگی:<?php echo $fetch['Surname'];?></h2>
    <h2>نام :<?php echo $fetch['Name']; ?></h2>
    <h3>نام کاربری:<?php echo $fetch['Username']; ?></h3>
    <h3>رمز:<?php echo $fetch['Password'];?> </h3>
    <h2>ایمیل :<?php echo $fetch['Email']; ?></h2>
    <h2>موبایل:<?php echo $fetch['Mobile']; ?></h2>
    <h2>تاریخ تولد:<?php echo $fetch['Birthday']; ?></h2>
  <p class="title">گیم نت سینا</p>
  <p></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  <p><button><a href="logout.php">خروج از حساب کاربری</a></button></p>
</div>
</body>
</html>
