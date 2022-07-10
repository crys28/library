// const user = document.getElementById('user');

// user.addEventListener('click', function User() {
//  document.getElementById('ord').style.cssText = "color: red";
// });

// function user(){
// 	 document.getElementById('ord').style.Display = "red";
// }


// $('#user').click(function() {
//     $('#ord').addClass('userNone');
// });


function change_css(){
			setTimeout(function() {document.getElementById("ord").style.display = "none";}, 1000);
        }

// const myTimeout2 = setTimeout(change_css2, 1000);

// function change_css2(){
//             document.getElementById("ord").style.display = "all";
//         }
// document.querySelector('#user').addEventListener('click', () => {
//   document.querySelector('#ord').classList.add('userNone');
// }); 

function loginAdmin(){
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
		
		if (user == "admin" && pass == "admin") {
			window.location.href = ('indexAdmin.php');
			}else{
				$("#pop_up2").css("opacity", "1");
			}

}