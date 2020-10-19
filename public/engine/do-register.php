<?php
require_once 'db.php';
$Name =  $_POST['Name'];
$Surname = $_POST['Surname'];
//$Username = $_POST['Username'];
//$Password = md5($_POST['Password']);
// $password_conf = md5($_POST['password-conf']);
$Email =  $_POST['Email'];
$Mobile =  $_POST['Mobile'];
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Birthday =  $_POST['Birthday'];
//if($password != $password_conf){
	// echo 'رمز شما و تکرار آن برابر نیستند.';
//}else{
$register = mysqli_query($db, "INSERT INTO Account (Name, Surname, Username, Password, Email, Mobile, Birthday) VALUES ('$Name', '$Surname', '$Username', '$Password', '$Email', '$Mobile', '$Birthday')");
	if($register){
		header('Location: ../login.php');
	}else{
		echo 'error';
	}
//}
?>
