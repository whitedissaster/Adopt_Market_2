function openNav() {
  	document.getElementById("mySidenav").style.width = "250px";
  	document.getElementById("main").style.marginLeft = "250px";
  	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  	document.getElementById("mySidenav").style.width = "0";
  	document.getElementById("main").style.marginLeft= "0";
  	document.body.style.backgroundColor = "#CD853F";
}

// Get the modal
//				var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
//				window.onclick = function(event) {
//			    	if (event.target == modal) {
//			        modal.style.display = "none";
//			    	}
//				}