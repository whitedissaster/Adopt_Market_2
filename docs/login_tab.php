<!--login tab-->
<?php
	if (session_status() == PHP_SESSION_DISABLED) {
		session_start();
	}
    
?>
<fieldset>
	<?php
		if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			echo 'now user :'.$_SESSION["user"].' [ID-'.$_SESSION["id"].']';?>
			<button onclick="window.location.href='logout.php'">ออกจากระบบ</button><?php
		}
		else
			{?>
				<br>
				<form id="login_form" method="post">
				
					User: <input type="text" id="user" name="user"><br>
					Pass: <input type="text" id="pass" name="pass"><br><br>

					<!--input type="submit" value="สมัคร" formaction="register.php"-->
					<input type="submit" value="เข้าสู่ระบบ" formaction="login.php">
				</form> <?php
			} ?>
</fieldset>
