<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<div class="login">
			<?php
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'login_tab.php';
			?>
		</div>

		<div class="all">
			<div class="row">
				<fieldset>
					<h1>ประวัติการซื้อขาย</h1>

					<div class="col-md-5">
				        <div class="about_left2">					
				            <h2>ประวัติการซื้อ</h2>
				        </div>
				    </div>

					<div class="col-md-7">
					    <div class="about_right">
							<h2>ประวัติการขาย</h2>
						</div>	
					</div>
				</fieldset>
		</div>
		</div>

	</body>
</html>