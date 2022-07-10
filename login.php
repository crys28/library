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
            
            <form name="login">
                <input id="username" type="text" name="username" placeholder="Username" required=""><br>
                <input id="password" type="password" name="password" placeholder="Password" required><br>
                
            </form>
            <button id="sendLogin" onclick="loginAdmin()">LOGIN</button>
 <div id="pop_up2" class="pop_up2" style="opacity: 0">
                     <h2>Wrong username or password</h2>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>

</div>

		<div class="jumbotron_ed3">
			<div class="login">
                <div class="user">
                <a id="user" href="index.php">USER</a>
                </div>
                <div class="admin">
                <a id="admin" href="" data-toggle="modal" data-target="#myModal">ADMIN</a>
                </div>
            </div>
		</div>


	</div>

<script type="text/javascript" src="login.js"></script>
</body>
</html>