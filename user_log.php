<?php

include_once 'database.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql_resetLogged = "UPDATE users SET logged='0' WHERE logged='1';";
$sql_user = "SELECT username, password FROM users WHERE username = '$user' and password = '$pass';";
$sql_update_status = "UPDATE users SET logged='1' WHERE username = '$user';";
$sql_update_cart = "UPDATE shoppingcart SET logged='1' WHERE username = '$user';";


mysqli_query($conn, $sql_resetLogged);
mysqli_query($conn, $sql_update_status);
mysqli_query($conn, $sql_update_cart);

$result2 = mysqli_query($conn, $sql_user);

$row2 = mysqli_fetch_assoc($result2);

if ($row2['username'] != $user and $row2['password'] != $pass) {
	header("Location: ../library/login.php?log=wrong");
}else{
	header("Location: ../library/indexLogged.php?log=success");
}


?>