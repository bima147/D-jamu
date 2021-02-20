window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var navlink = document.getElementById("navlink");
var sticky = 50;

function myFunction() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("bg-white");
		navbar.classList.remove("navbar-dark");
		navbar.classList.add("navbar-light");
	} else {
		navbar.classList.remove("bg-white");
		navbar.classList.remove("navbar-light");
		navbar.classList.add("navbar-dark");
	}
}