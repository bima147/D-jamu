	window.onscroll = function() {myFunction()};

	var toko = document.getElementById("toko");
	var navlink = document.getElementById("navlink");
	var sticky = 10;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			toko.classList.add("bg-white");
			toko.classList.remove("navbar-dark");
			toko.classList.add("navbar-light");
		} else {
			toko.classList.remove("bg-white");
			toko.classList.remove("navbar-light");
			toko.classList.add("navbar-dark");
		}
	}