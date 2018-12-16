<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/login_tab.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	</head>
	<body link="black" vlink="black" alink="gray">

		<!--fieldset-->
			<?php
			    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			    	echo 'now user :'.$_SESSION["user"].' [ID-'.$_SESSION["id"].']';?>
			    	<button onclick="window.location.href='logout.php'" class="logoutbtn">Logout</button><?php
			    }
			    else
			{?>
		    <br>
	        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

			<div id="id01" class="modal">
			  
			  	<form class="modal-content animated zoomIn" action="/action_page.php">
			    	<div class="imgcontainer">
			      		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			      
			    	</div>

			    	<div class="container">
			      		<label for="uname"><b>Username</b></label>
			      		<input type="text" placeholder="Enter Username" name="uname" required>

			      		<label for="psw"><b>Password</b></label>
			      		<input type="password" placeholder="Enter Password" name="psw" required>
			        
			      		<button type="submit" value="login" formaction="login.php">Login</button>

			      		<label>คุณยังไม่ได้สมัครสมาชิก? <i class="fa fa-long-arrow-right"></i></label>

			      		<a href="signup_tab.php" target="_parent" style="text-decoration: none; font-family: 'Kanit', sans-serif;">สมัครสมาชิก</a>

			    	</div>

				    <div class="container" style="background-color:#CD853F">
				      	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				    </div>
				</form>
			</div>

			<script>
				// Get the modal
				var modal = document.getElementById('id01');

				// When the user clicks anywhere outside of the modal, close it
				document.onclick = function(event) {
			    	if (event.target == modal) {
			        modal.style.display = "none";
			    	}
				}
			</script>

		<?php
		      } ?>
		<!--/fieldset-->

	</body>
</html>