<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/signup_tab.css">
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		<div class="all" style="border-radius: 10px;">
		    <fieldset>

		    	<form action="/action_page.php" style="max-width:500px;margin:auto">
		    	<h2>Signup Form</h2>
			  	<div class="input-container">

			    <hr>
			    <label for="usrnm"><b>Username</b></label>
			    <input class="input-field" type="text" placeholder="Username" name="usrnm" required>

			    <div id="AB" style="display: block;">
			    	<i class="fa fa-check-circle" style="color: green; font-size: 15px;"> Username นี้สามารถใช้ได้</i><br>
				</div>

			    <div id="AB" style="display: block;">
			    	<i class="fa fa-times-circle" style="color: red; font-size: 15px;"> Username นี้มีผู้ใช้แล้ว</i><br>
			    </div>
            	
			    <label for="email"><b>Email</b></label>
			    <input class="input-field" type="text" placeholder="Email" name="email" required>

			    <label for="psw"><b>Password</b></label>
			    <input class="input-field" type="password" placeholder="Password" name="psw" id="myInput" required>
			    <input type="checkbox" onclick="myFunction()">Show Password
			    <hr>
			  	</div>

			  	<button type="submit" value="signup" formaction="signup.php">Signup</button>

				</form>

		    </fieldset>
		</div>
		<!--/fieldset-->

	</body>
</html>

<script>
	function myFunction() {
  		var x = document.getElementById("myInput");
  		if (x.type === "password") {
    	x.type = "text";
  		} else {
    	x.type = "password";
  	}
}
</script>