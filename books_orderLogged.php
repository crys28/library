<?php

include_once 'database.php';

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$oras = $_POST['oras'];
$postal = $_POST['postal'];
$email = $_POST['email'];
$adresa = $_POST['adresa'];
$idCarte_Titlu = $_POST['idCarte_Titlu'];

//  	$sql_id = "SELECT * FROM carte;"
$sql_getUsername = "SELECT username from users where logged = '1';";
$result = mysqli_query($conn, $sql_getUsername);
$user = mysqli_fetch_assoc($result);
$username = $user['username'];

$sql_getBooks = "SELECT GROUP_CONCAT(bookTitle) as 'Books' FROM shoppingcart where logged = '1'";
$result2 = mysqli_query($conn, $sql_getBooks);
$books = mysqli_fetch_assoc($result2);
$bookTitles = $books['Books'];

$sqlPrice = "SELECT SUM(bookPrice) as price FROM shoppingcart WHERE logged = '1';";  
$resultPrice = mysqli_query($conn, $sqlPrice);
$rowPrice = mysqli_fetch_assoc($resultPrice);
$price = $rowPrice['price'];

$sql = "INSERT INTO `comenzi` (`username`,`Nume`,`Prenume`,`Oras`,`CodPostal`,`Email`,`Adresa`,`bookTitle`,`price`,`Data_Comanda`) VALUES ('$username','$nume','$prenume','$oras','$postal','$email','$adresa','$bookTitles','$price',current_date());";
mysqli_query($conn, $sql);

$sqlDeleteShopCartItems = "DELETE FROM shoppingcart WHERE logged = '1';";
mysqli_query($conn, $sqlDeleteShopCartItems);

header("Location: ../library/booksLogged.php?order=success")


;




?>