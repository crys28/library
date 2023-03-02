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
            <a href="indexLogged.php" class="navbar-brand"><i class="fas fa-skull-crossbones"></i> Crys's Library</a>
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="booksLogged.php">Books</a></li>
                <li class="active"><a href="ordersLogged.php">My Orders</a></li>
                <li><a href="contactsLogged.php">Contact us</a></li>
                <li><a href=""></a></li>
                <li data-toggle="modal" data-target="#shoppingCartModal"><a class="shopping-cart" ><img src="img/shopping-cart.png"></a></li>
                <li><a href=""></a></li>
                <li><a id="NameOfUser">
                    
                      <?php
                          $sql = "SELECT username FROM users WHERE logged = '1'";

                          $result = mysqli_query($conn, $sql);
                              while ($row = mysqli_fetch_assoc($result)) {
                                  echo 'Hi, ' . $row['username'];
                              }
                          
                      ?>

                 </a></li>
                <li><a class="logout" href="login.php" onclick="logOut()"><img src="img/logout.png"></a></li>
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
					            
					          <table class="shoppingCartTable">
			            <tr>	
			              <th>Title</th>
			              <th>Author</th>
			              <th>Price</th>
			              <th><img src="img/delete.png"></th>
			            </tr>
			             <?php
                                $sql = "SELECT * FROM shoppingcart WHERE logged = '1';";

                                $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {                            
                                        echo '<td>' . $row['bookTitle'] . '</td>';
                                        echo '<td>' . $row['bookAuthor'] . '</td>';
                                        echo '<td>' . $row['bookPrice'] . ' lei' . '</td>';
                                        echo '<td><button><a href="delete.php?id=' . $row['idUserCart'] . '">Delete</a></button></td></tr>';
                                    }
                                
                            ?> 
         					 </table>

					        </div>

					        <div class="modal-footer">
					          <span class="totalPriceCart">Total : <?php $sql = "SELECT SUM(bookPrice) as price FROM shoppingcart WHERE logged = '1';";  
					          $result = mysqli_query($conn, $sql);
					          $row = mysqli_fetch_assoc($result);
					          echo $row['price'] . ' lei';
					          ?></span>
					          <button type="button" class="btn btn-default buyBtn" data-toggle="modal" data-target="#myModal">Buy</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
				      </div>
				      
				      	</div>

				</div>
	        </div>



	<div class="conainter welcome">
		

		<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please fill in the credentials !</h4>
        </div>
        <div class="modal-body">
          	
          	<form name="order" action="books_orderLogged.php" method="POST">
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


		<div class="jumbotron_ed3">
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
						<th>Pret</th>
						<th>DataComanda</th>
						<th><img src="img/delete.png"></th>
					</tr>
					<!-- <p>idComanda | Nume | Prenume | Oras | CodPostal | Email | Adresa | Titlu</p> -->

										<?php
											$sqlUser = "SELECT username FROM users WHERE logged = '1'";
                        					$resultUser = mysqli_query($conn, $sqlUser);
                        					$rowUser = mysqli_fetch_assoc($resultUser);
                        					$username = $rowUser['username'];

										    $sql = "SELECT * FROM comenzi WHERE username = '$username';";
										    $sqlPrice = "SELECT SUM(bookPrice) as price FROM shoppingcart WHERE logged = '1';";  
					          				$resultPrice = mysqli_query($conn, $sqlPrice);
					          				$rowPrice = mysqli_fetch_assoc($resultPrice);
										    $result = mysqli_query($conn, $sql);
										        while ($row = mysqli_fetch_assoc($result)) {
										            echo '<tr>' . '<td>' . $row['idComenzi'] . '</td>';
										            echo '<td>' . $row['Nume'] . '</td>';
										            echo '<td>' . $row['Prenume'] . '</td>';
										            echo '<td>' . $row['Oras'];
										            echo '<td>' . $row['CodPostal'] . '</td>';
										            echo '<td>' . $row['Email'] . '</td>';
										            echo '<td>' . $row['Adresa']. '</td>';
										            echo '<td>' . $row['bookTitle'] . '</td>';
										            echo '<td>' . $row['price'] . ' lei' . '</td>';
										            echo '<td>' . $row['Data_Comanda'] . '</td>';
										            echo '<td><button><a href="deleteOrder.php?id=' . $row['idComenzi'] . '">Delete</a></button></td>' . '</tr>';
										        }
										    
										?>

				</table>
			</div>
		</div>


	</div>

<div class="footer">
  <div>Created with JS,PHP & MySQL </div>
  <div onclick="window.location = 'https://crys28.github.io/mycv/'">@2023 Iacomachi Cristian</div>
  <div onclick="window.location = 'contactsLogged.php'">Contact us</div>
</div>

<script>
            $("#send").click(function() {
     if ($("form[name='order']").valid() == true) {
     $("#pop_up").css("opacity", "1");
    }
});
       </script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

<script type="text/javascript" src="login.js"></script>
</body>
</html>