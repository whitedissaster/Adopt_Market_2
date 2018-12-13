<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<nav>
			<span>
				<li><a href="">หน้าหลัก</a></li>
				<li><a href="Create_Adopt.php">สร้างอดอป</a></li>
				<li><a href="search.php">ค้นหา</a></li>
			</span>
		</nav>

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

					<!--div class="col-md-5"-->
				        <div class="his" style="background-color: #FFEFD5">					
				            <h2>ประวัติการซื้อ</h2>
				            
				        </div>
				    <!--/div-->

					<!--div class="col-md-7"-->
					    <div class="his" style="background-color: #FFEBCD">
							<h2>ประวัติการขาย</h2>
							
						</div>	
					<!--/div-->
				</fieldset>
		</div>
		</div>

	</body>
</html>