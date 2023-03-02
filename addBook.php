<?php
include_once 'database.php';

// function addBook(){
$sql_getUsername = "SELECT username from users where logged = '1';";

$user_id = $_GET['id'];

$sql = "SELECT
Pret, 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = '$user_id';";
$result2 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result2);

$title = $row['Titlu'];
$author = $row['Author'];
$price = $row['Pret'];


$result = mysqli_query($conn, $sql_getUsername);
$user = mysqli_fetch_assoc($result);
$username = $user['username'];
$sql_AddToCart = "INSERT INTO `shoppingcart` (`username`,`bookTitle`,`bookAuthor`,`bookPrice`,`logged`) VALUES ('$username','$title','$author','$price', '1');";
mysqli_query($conn, $sql_AddToCart);
header("Location: ../library/booksLogged.php?log=success");


// }


?>