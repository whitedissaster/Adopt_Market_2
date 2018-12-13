<!--login-->
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<div class="all">
			<div class="row">
				<fieldset>
					<?php
						//include 'ConnextDatabase.php';
						session_start();

						isset($_REQUEST['user']) ? $user = $_REQUEST['user'] : $user = "";
						isset($_REQUEST['pass']) ? $pass = $_REQUEST['pass'] : $pass = "";

						$query = 'MATCH (u:User{user:"'.$user.'"}) RETURN u.user,u.pass,u.id LIMIT 1';
						$result = $client->run($query);
						foreach ($result->getRecords() as $record) {
									$a = $record->get('u.user');
									$b = $record->get('u.pass');
									$id = $record->get('u.id');

						
						echo "สถานะเข้าสู่ระบบ : ";

								if ($user == $a and $pass == $b) {
										$login = true;
										echo 'สำเร็จ';
								}else{
										$login = false;
										echo 'ล้มเหลว';
									}
								}

						echo sprintf('<br>id : %d <br> user : %s <br>pass : %s <br>', $id, $a, $b);
						echo('<br><br><a href="Create_Adopt.php">Create Adopt</a>');

						if ($login) {
							$_SESSION['id'] = $id;
							$_SESSION['user'] = $a;
						}
					?>
				</fieldset>
			</div>
		</div>

	</body>
</html>