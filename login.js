

function refresh(){
    setTimeout(function() {window.location.reload();}, 500);
    
}

function logOut(){
    $.get("logOut.php");
    return false;
}

function change_css(){
			setTimeout(function() {document.getElementById("ord").style.display = "none";}, 1000);
        }

function checkboxChecked(){

if ((document.getElementById('Detectiv').checked == true) ||
      (document.getElementById('Aventura').checked == true) ||
      (document.getElementById('Horror').checked == true) ||
      (document.getElementById('Romantică').checked == true)||
      (document.getElementById('Fantastică').checked == true) ||
      (document.getElementById('Filozofie').checked == true) ||
      (document.getElementById('SF').checked == true) ||
      (document.getElementById('Crimă').checked == true)) {
           $(".DetectivBook").css("display", "none");
           $(".CrimăBook").css("display", "none");
           $(".SFBook").css("display", "none");
           $(".FilozofieBook").css("display", "none");
           $(".AventuraBook").css("display", "none");
           $(".HorrorBook").css("display", "none");
           $(".RomanticăBook").css("display", "none");
           $(".FantasticăBook").css("display", "none");
  } else {
           $(".DetectivBook").css("display", "block");
           $(".CrimăBook").css("display", "block");
           $(".SFBook").css("display", "block");
           $(".FilozofieBook").css("display", "block");
           $(".AventuraBook").css("display", "block");
           $(".HorrorBook").css("display", "block");
           $(".RomanticăBook").css("display", "block");
           $(".FantasticăBook").css("display", "block");
  }


  if (document.getElementById('Detectiv').checked) {
            $(".DetectivBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".DetectivBook").css("display", "none");            

        }

  if (document.getElementById('Crimă').checked) {
            $(".CrimăBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Detectiv').checked == true)) {
            
            $(".CrimăBook").css("display", "none");            

        }

        if (document.getElementById('Aventura').checked) {
            $(".AventuraBook").css("display", "block");
           
        } else if ((document.getElementById('Detectiv').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".AventuraBook").css("display", "none");            

        }

        if (document.getElementById('Horror').checked) {
            $(".HorrorBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Detectiv').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".HorrorBook").css("display", "none");            

        }

        if (document.getElementById('Romantică').checked) {
            $(".RomanticăBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Detectiv').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".RomanticăBook").css("display", "none");            

        }

        if (document.getElementById('Fantastică').checked) {
            $(".FantasticăBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Detectiv').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".FantasticăBook").css("display", "none");            

        }

        if (document.getElementById('Filozofie').checked) {
            $(".FilozofieBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Detectiv').checked == true) ||
                  (document.getElementById('SF').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".FilozofieBook").css("display", "none");            

        }

        if (document.getElementById('SF').checked) {
            $(".SFBook").css("display", "block");
           
        } else if ((document.getElementById('Aventura').checked == true) ||
                  (document.getElementById('Horror').checked == true) ||
                  (document.getElementById('Romantică').checked == true)||
                  (document.getElementById('Fantastică').checked == true) ||
                  (document.getElementById('Filozofie').checked == true) ||
                  (document.getElementById('Detectiv').checked == true) ||
                  (document.getElementById('Crimă').checked == true)) {
            
            $(".SFBook").css("display", "none");            

        }
}

function myFunction() {
  var x = document.getElementById("filter");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}



window.onscroll = function() {stickyFilter()};

var header = document.getElementById("filter");
var sticky = header.offsetTop;

function stickyFilter() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// }

function loginUser(){

var user = document.getElementById("usernameUser").value;
var pass = document.getElementById("passwordUser").value;
		
		if (user == "user" && pass == "user") {
			window.location.href=('index.php')
			}
			
			
}


function moveToReg(){
	$("#loginForm_div").css("z-index", "-1");
	$("#div_Reg").css("z-index", "1");
}

function moveToLog(){
	$("#loginForm_div").css("z-index", "1");
	$("#div_Reg").css("z-index", "-1");
}


   $(function () {
        $("form[name='reg']").validate({
            
            rules: {
                username: "required",
                password: "required",
                email: "required",
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password:{
                    required: true,
                    minlength: 4
                }
            },
            
            messages: {
                username: {
                    required: "Introduceti un nume"
            },
                password: {
                    required: "Introduceti o parola",
                    minlength: "Minim 4 caractere"
            },
                email: {
                    required: "Introduceti o adresa de email",
                    email: "Adresa de email invalida!('@')"              
            }
        },
            submitHandler: function(form) {

          form.submit();

    }
        });
    }); 


  $(function () {
        $("form[name='login']").validate({
            
            rules: {
                username: "required",
                password: "required",
                password:{
                    required: true,
                    minlength: 4
                }
            },
            
            messages: {
                username: {
                    required: "Introduceti numele"
            },
                password: {
                    required: "Introduceti parola",
                    minlength: "Minim 4 caractere"
            }
        },
            submitHandler: function(form) {
          form.submit();
    }
        });
    }); 



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