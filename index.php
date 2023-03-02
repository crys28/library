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
                <!-- <li><a id="ord" href="orders.php">My Orders</a></li> -->
                <li><a href="contacts.php">Contact us</a></li>
                <li><a href=""></a></li>
                 <li data-toggle="modal" data-target="#myModal"><a class="shopping-cart" ><img src="img/shopping-cart.png"></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a class="logout" href="login.php"><img src="img/logout.png"></a></li>

                 <!-- <li><a class="logout" href="login.php"><img src="img/logout.png"></a></li> -->


            </ul>

            

        </div>
    </div>
</nav>
    
    <div id="fly_book">
        <img src="img/book.png">
    </div>

<div>
              <div class="modal fade" id="myModal" role="dialog">
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



    <div class="jumbotron_ed">
            
                <div id="title">
            <h1>"<i>Crys's Library</i>"</h1>
             </div>
            
           <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 90%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" onclick="window.location='books.php'">
      <div class="item active">
        <img src="img/slide1.webp" alt="Los Angeles" style="width:60%;margin-left: 25%">
      </div>

      <div class="item">
        <img src="img/slide2.jpg" alt="Chicago" style="width:60%;margin-left: 25%">
      </div>
    
      <div class="item">
        <img src="img/slide3.jpg" alt="New york" style="width:60%;margin-left: 25%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        
    </div>


</div>

<div class="footer">
  <div>Created with JS,PHP & MySQL </div>
  <div onclick="window.location = 'https://crys28.github.io/mycv/'">@2023 Iacomachi Cristian</div>
  <div onclick="window.location = 'contacts.php'">Contact us</div>
</div>

<script type="text/javascript" src="login.js"></script>
</body>
</html>