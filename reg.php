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
		
          
                        <div id="regForm_div" class="regForm_div">
                          
                          <form action="user_reg.php" name="reg" method="POST" class="regForm">
                            <input id="email" type="email" name="email" placeholder="Email" required=""><br><br>
                            <input id="username" type="text" name="username" placeholder="Username" required=""><br><br>
                            <input id="password" type="password" name="password" placeholder="Password" required><br><br>
                            <button onclick="reg_Success()" id="sendReg" type="submit" name="submit">REGISTER</button>
                        </form>
                       
                       <div id="pop_up" class="pop_up" style="opacity: 0;">
                     <h2>Inregistrare cu succes !</h2>
                       </div>

                       <div id="pop_up2" class="pop_up2" style="opacity: 0; font-size: 1vw">
                     <h2>Utilizator existent !</h2>
                    </div>

                            <div class="LogCaption-FromReg">
                            <caption>Already registered? - Click here -></caption>
                            <button onclick="location.href='login.php'" class="LogBtn-from-reg">Login</button>
                            <br><br>
                            </div>

                        </div>
           
		</div>


	</div>
<script type="text/javascript">

$("#sendReg").click(function() {
     if ($("form[name='reg']").valid() != true) {
     $("#pop_up2").css("opacity", "1");
     $("#pop_up").css("opacity", "0");
    } else{
      $("#pop_up").css("opacity", "1");
    }
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="login.js"></script>

</body>
</html>