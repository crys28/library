<?php

    include_once 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Crys's Library</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top nav_hover">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><i class="fas fa-skull-crossbones"></i> Crys's Library</a>
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="books.php">Books</a></li>
                <li class="active"><a href="orders.php">My Orders</a></li>
                <li><a href="contacts.php">Contact us</a></li>
            </ul>
        </div>
    </div>
	</nav>

	<div class="conainter welcome">
		
		<div class="jumbotron_ed2">
			<p class="banner">Lista comenzilor !</p>
			<div class="orders">
				<table>
					<tr>
						<th>idComanda</th>
						<th>Nume</th>
						<th>Prenume</th>
						<th>Oras</th>
						<th>CodPostal</th>
						<th>Email</th>
						<th>Adresa</th>
						<th>Titlu</th>
					</tr>
					<!-- <p>idComanda | Nume | Prenume | Oras | CodPostal | Email | Adresa | Titlu</p> -->

										<?php
										    $sql = "SELECT 
													idComenzi,
													Nume,
													Prenume,
													Oras,
													CodPostal,
													Email,
													Adresa,
													a.Titlu AS Titlu
													FROM comenzi AS b JOIN carte AS a
													ON b.idCarte_Titlu = a.idCarte;";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo '<tr>' . '<td>' . $row['idComenzi'] . '</td>';
										            echo '<td>' . $row['Nume'] . '</td>';
										            echo '<td>' . $row['Prenume'] . '</td>';
										            echo '<td>' . $row['Oras'];
										            echo '<td>' . $row['CodPostal'] . '</td>';
										            echo '<td>' . $row['Email'] . '</td>';
										            echo '<td>' . $row['Adresa']. '</td>';
										            echo '<td>' . $row['Titlu'] . '</td>' . '</tr>';
										        }
										    
										?>

				</table>
			</div>
		</div>


	</div>


</body>
</html>