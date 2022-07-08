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

$sql = "INSERT INTO `comenzi` (`Nume`,`Prenume`,`Oras`,`CodPostal`,`Email`,`Adresa`,`Data_Comanda`,`idCarte_Titlu`) VALUES 
('$nume','$prenume','$oras','$postal','$email','$adresa',current_date(),'$idCarte_Titlu');";
mysqli_query($conn, $sql);

header("Location: ../books.php?order=success")







?>