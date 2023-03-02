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
            	<!-- <li><a><input id="txtSearch" name="" style="color: black "></a></li>
            	<li><a onclick="searchtxt()">Search</a></li> -->
                <li class="active"><a href="books.php">Books</a></li>
                <!-- <li><a href="orders.php">My Orders</a></li> -->
                <li><a href="contacts.php">Contact us</a></li>
                <li><a href=""></a></li>
                 <li data-toggle="modal" data-target="#shoppingCartModal"><a class="shopping-cart" ><img src="img/shopping-cart.png"></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                <li><a class="logout" href="login.php"><img src="img/logout.png"></a></li>
            </ul>
        </div>
    </div>
</nav>


<div>
              <div class="modal fade" id="shoppingCartModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Your shopping cart !</h2>
        </div>
        <div class="modal-body">
            
          <table>
            
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>

</div>
            </div>



<div class="container welcome">


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please fill in the credentials !</h4>
        </div>
        <div class="modal-body">
          	
          	<form name="order" action="book_order.php" method="POST">
          		<input type="text" name="nume" placeholder="Nume"><br><br>
          		<input type="text" name="prenume" placeholder="Prenume" required><br><br>
          		<input type="text" name="oras" placeholder="Oras" required><br><br>
          		<input type="text" name="postal" placeholder="Cod Postal" required><br><br>
          		<input type="email" name="email" placeholder="Email" required><br><br>
          		<input type="text" name="adresa" placeholder="Adresa" required><br><br>
          		<input  type="text" name="idCarte_Titlu" id="id" class="id"><br><br>
          		<button id="send" type="submit" name="submit">Place the Order !</button>
          	</form>
 
 <div id="pop_up" class="pop_up" style="opacity: 0">
                     <h2>Comanda plasata cu succes !</h2>
            </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>

</div>



<div class="jumbotron_ed2">

<button id="filter_mobile" onclick="myFunction()">Filter</button>

<div id="filter" class="filter">
		<div>
		<input id="Aventura" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Aventura</span>
		</div>
		<div>
		<input id="Detectiv" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Detectiv</span>
		</div>
		<div>
		<input id="Horror" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Horror</span>
		</div>
		<div>
		<input id="Romantică" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Romantică</span>
		</div>
		<div>
		<input id="Fantastică" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Fantastică</span>
		</div>
		<div>
		<input id="Filozofie" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Filozofie</span>
		</div>
		<div>
		<input id="SF" type="checkbox" name="" onclick="checkboxChecked()">
		<span>SF</span>
		</div>
		<div>
		<input id="Crimă" type="checkbox" name="" onclick="checkboxChecked()">
		<span>Crimă</span>
		</div>
		

	</div>
	<br><br>

	<div class="row">

		<div class="col-lg-3 col-sm-6 DetectivBook">
		
			<div class="thumbnail" id="thumb">
				<img src="img/books/mercedes.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 1";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
								  <button onclick="window.location='login.php'" id="btn1"  type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
								 


					</div>

<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 1;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
				
			</div>
	
		</div>

		<div id="pride" class="col-lg-3 col-sm-6 RomanticăBook">
		
			<div class="thumbnail">
				<img src="img/books/pride.jpg">
					<div class="overlay">
								<p class="overlay_text">
										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 2";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';					
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										   
										?>
									<button onclick="window.location='login.php'" id="btn1"  type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 2;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
			</div>
	
		</div>

		<div id="necronomicon" class="col-lg-3 col-sm-6 HorrorBook">
		
			<div class="thumbnail">
				<img src="img/books/lovecraft.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 3";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 3;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>	
					</div>
	
		</div>

		<div id="dracula" class="col-lg-3 col-sm-6 HorrorBook">
		
			<div class="thumbnail">
				<img src="img/books/dracula.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 4";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 4;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="maitreyi" class="col-lg-3 col-sm-6 RomanticăBook">
		
			<div class="thumbnail">
				<img src="img/books/maitreyi.webp">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 5";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 5;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
			</div>
	
		</div>

		<div id="stendhal" class="col-lg-3 col-sm-6 AventuraBook">
		
			<div class="thumbnail">
				<img src="img/books/stendhal.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 6";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 6;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="stranger" class="col-lg-3 col-sm-6 FilozofieBook">
		
			<div class="thumbnail">
				<img src="img/books/stranger.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 7";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 7;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="metamorfoza" class="col-lg-3 col-sm-6 FilozofieBook">
		
			<div class="thumbnail">
				<img src="img/books/kafka.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 8";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 8;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="misery" class="col-lg-3 col-sm-6 HorrorBook">
		
			<div class="thumbnail">
				<img src="img/books/misery.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 9";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 9;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
				</div>
	
		</div>

		<div id="fahrenheit" class="col-lg-3 col-sm-6 SFBook">
		
			<div class="thumbnail">
				<img src="img/books/bradbury.webp">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 10";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 10;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="padurea" class="col-lg-3 col-sm-6 RomanticăBook">
		
			<div class="thumbnail">
				<img src="img/books/norvegiana.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 11";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 11;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="kafka" class="col-lg-3 col-sm-6 FantasticăBook">
		
			<div class="thumbnail">
				<img src="img/books/kafka_pe_malul_marii.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 12";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 12;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="levy" class="col-lg-3 col-sm-6 RomanticăBook">
		
			<div class="thumbnail">
				<img src="img/books/levy.webp">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 13";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 13;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="postman" class="col-lg-3 col-sm-6 CrimăBook">
		
			<div class="thumbnail">
				<img src="img/books/postman.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 14";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 14;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="salinger" class="col-lg-3 col-sm-6 FilozofieBook">
		
			<div class="thumbnail">
				<img src="img/books/salinger.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 15";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 15;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="1984" class="col-lg-3 col-sm-6 SFBook">
		
			<div class="thumbnail">
				<img src="img/books/orwell.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 16";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 16;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="mocking" class="col-lg-3 col-sm-6 AventuraBook">
		
			<div class="thumbnail">
				<img src="img/books/mocking.webp">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 17";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 17;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="virginia" class="col-lg-3 col-sm-6 DetectivBook">
		
			<div class="thumbnail">
				<img src="img/books/virginia.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 18";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 18;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="mann" class="col-lg-3 col-sm-6 FantasticăBook">
		
			<div class="thumbnail">
				<img src="img/books/mann.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 19";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 19;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>

		<div id="crima" class="col-lg-3 col-sm-6 CrimăBook">
		
			<div class="thumbnail">
				<img src="img/books/dostoievski.jpg">
					<div class="overlay">
								<p class="overlay_text">

										<?php
										    $sql = "SELECT * FROM carte WHERE idCarte = 20";

										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo 'Gen- ' . $row['Gen']  . ' <br> ';
										            echo 'An pub.- ' . $row['An_Publicare'] . ' <br> ';
										            echo 'Limba- ' . $row['Limba'] . ' <br> ';						
										            echo 'Preț- ' . $row['Pret'] . ' lei' . ' <br> ';
										        }
										    
										?>
									<button onclick="window.location='login.php'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
								</p>
					</div>
<?php
    $sql = "SELECT 
idCarte,
b.Titlu AS Titlu,
a.Nume AS Author
FROM carte AS b JOIN autor AS a
ON b.idAutor = a.idAutor WHERE idCarte = 20;";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Titlu'] . ' - ';
            echo $row['Author'];
        }
    
?>
						</div>
	
		</div>


	</div>

</div>

<div class="footer">
  <div>Created with JS,PHP & MySQL </div>
  <div onclick="window.location = 'https://crys28.github.io/mycv/'">@2023 Iacomachi Cristian</div>
  <div onclick="window.location = 'contacts.php'">Contact us</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

<script>
    $(function () {
        $("form[name='order']").validate({
            
            rules: {
                nume: "required",
                prenume: "required",
                oras: "required",
                postal: "required",
                email: "required",
                adresa: "required",
                nume: {
                    required: true,
                    number: false
                },
                prenume: {
                    required: true,
                    number: false
                },
                email: {
                    required: true,
                    email: true
                },
                postal: {
                    required: true,
                    number: true
                },
                oras: {
                    required: true,
                    number: false
                }
            },
            
            messages: {
                nume: {
                    required: "Va rog introduceti un nume"
            },
                prenume: {
                    required: "Va rog introduceti un prenume"
            },
                email: {
                    required: "Va rog introduceti o adresa de email",
                    email: "Introduceti o adresa de mail valida!('@')"              
            },
            postal: {
                    required: "Va rog introduceti codul postal",
                    number: "Codul postal poate contine doar cifre"              
            },
            oras: {
                    required: "Va rog introduceti orasul unde va aflati"             
            },
            adresa: {
            		required: "Va rog introduceti adresa"
            }
        },
            submitHandler: function(form) {
    		  form.submit();
    }
        });
    }); 
</script>

<script>
            $("#send").click(function() {
     if ($("form[name='order']").valid() == true) {
     $("#pop_up").css("opacity", "1");
    }
});
       </script>

<script type="text/javascript" src="btn.js"></script>
<script type="text/javascript" src="login.js"></script>
</body>
</html>