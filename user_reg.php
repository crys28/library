<?php

include_once 'database.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

//  	$sql_id = "SELECT * FROM carte;"

$sql = "INSERT INTO `users` (`username`,`password`,`email`,`logged`) VALUES ('$user','$pass','$email','0');";
$sql_mail = "SELECT email FROM users WHERE email = '$email';";
$sql_user = "SELECT username FROM users WHERE username = '$user';";
$sql_pass = "SELECT password FROM users WHERE password = '$pass';";

$result = mysqli_query($conn, $sql_mail);
$result2 = mysqli_query($conn, $sql_user);
$result3 = mysqli_query($conn, $sql_pass);
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);

if ($row['email'] != $email && $row2['username'] != $user && $row3['password'] != $pass) {
	mysqli_query($conn, $sql);
	header("Location: ../library/login.php?reg=success");

}else{
	header("Location: ../library/reg.php?reg=wrong");
}


?>