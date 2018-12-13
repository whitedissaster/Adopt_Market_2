<!--logout-->
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>
		<div class="all">
			<div class="row">
				<div class="logout">
					<fieldset>
					<?php
						session_start();
						unset($_SESSION['id']);
						unset($_SESSION['user']);

						echo('ออกจากระบบแล้ว<br><br><a href="Create_Adopt.php">Create Adopt</a>');
					?>
					</fieldset>
				</div>
			</div>
		</div>

	</body>
</html>