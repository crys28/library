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
		
		<div class="jumbotron_ed3">
			
            <div id="loginForm_div" class="loginForm_div">

            <form action="user_log.php" method="POST" class="loginForm" name="login">
                <input id="usernameUser" type="text" name="username" placeholder="Username" required><br><br>
                <input id="passwordUser" type="password" name="password" placeholder="Password" required><br><br>
                <button onclick="getlogin()" type="submit" style="margin-bottom: 5%" id="sendLoginUser" >LOGIN</button>
                <br>
                <button onclick="window.location = 'index.php'" style="font-size: 1.5rem;">Login as guest</button>
            </form>
            
            

            
            <div id="pop_up2" class="pop_up2" style="opacity: 0; font-size: 1vw">
                     <h2>Wrong username or password</h2>
            </div>
            
                <div class="RegCaption-FromLog">
                <caption>Not registered? - Click here -></caption>
                <button onclick="location.href='reg.php'" style="margin-bottom: 5%" class="RegBtn-from-login" data-toggle="modal" data-target="#myModal3" data-dismiss="modal">Register</button>
                </div>
            </div>

          
		</div>


	</div>

<script>
            $("#sendLoginUser").click(function() {
     if ($("form[name='login']").valid() != true) {
     $("#pop_up2").css("opacity", "1");
    }
});
       </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="login.js"></script>
</body>
</html>