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
			<div class="row">
		    <fieldset>

		    	<form action="/action_page.php" style="max-width:500px;margin:auto">
		    	<div class="input-container">
		    	<h2>Sign Up Form</h2>
			  	

			    <hr>
			    <label for="usrnm"><b>Username</b></label>
			    <input class="input-field" type="text" placeholder="Enter Username" name="usrnm" required>

			    <div id="AB" style="display: block;">
			    	<i class="fa fa-check-circle" style="color: green; font-size: 15px;"><font face="Kanit"> Username นี้สามารถใช้ได้</i><br>
				</div>

			    <div id="AB" style="display: block;">
			    	<i class="fa fa-times-circle" style="color: red; font-size: 15px;"><font face="Kanit"> Username นี้มีผู้ใช้แล้ว</i><br>
			    </div>
            	
			    <label for="email"><b>Email</b></label>
			    <input class="input-field" type="text" placeholder="Enter Email" name="email" required>

			    <label for="psw"><b>Password</b></label>
			    <input class="input-field" type="password" placeholder="Enter Password" name="psw" id="myInput" required>

			    <!--input type="checkbox" onclick="myFunction()">Show Password-->
			    <label class="ccontainer">Show Password
					<input id="in" type="checkbox" onclick="myFunction()">
					<span class="checkmark"></span>
				</label>

			    <hr>
			  	</div>

			  	<!--a href=javascript:history.back(1)>Cancel</a-->
			  	<input type=button onClick='window.history.back()' value='Cancel' class="cancelbtn">

			  	<button type="submit" value="signup" formaction="signup.php" class="signupbtn" style="font-family: 'Kanit', sans-serif; height: 46px;">Sign Up</button>

				</form>

		    </fieldset>
		    </div>
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