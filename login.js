
function loginAdmin(){
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
		
		if (user == "admin" && pass == "admin") {
			window.location.href = ('indexAdmin.php');
			}else{
				$("#pop_up2").css("opacity", "1");
			}

}