<?php
require_once 'db.php';

$Name = $_POST['Name'];
$Surname = $_POST['Surname'];

$check = mysqli_query($db, "SELECT * FROM Account WHERE Name='$Name' AND Surname='$Surname'");
if(mysqli_num_rows($check) > 0){ // این یک نقطه نیست و عدد صفر میباشد.
	$_SESSION["loggedin"] = $Surname;
	header('Location: ../profile.php');
}else{
	header('Location: ../register.php');
}

?>
