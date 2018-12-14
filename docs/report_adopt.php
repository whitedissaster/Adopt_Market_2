<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<nav>
			<span>
				<li><a href="home.php">หน้าหลัก</a></li>
				<li><a href="Create_Adopt.php">สร้างอดอป</a></li>
				<li><a href="view_adopt.php">view adopt</a></li>
				<li><a href="history.php">ประวัติการซื้อขาย</a></li>
				<li><a href="search.php">ค้นหา</a></li>
			</span>
		</nav>

		<div class="login">
			<?php 
				include 'login_tab.php';
			?>
		</div>

		<div class="all">
			<div class="col-md-7">
		        <div class="about_right">
					<fieldset>
						<form id="report_adopt" action="" method="post" enctype="multipart/form-data">

						<h1>รายงานการละเมิดลิขสิทธิ์</h1>

						<label>ชื่อผู้ละเมิด</label><br>
						<input type="text" id="" name="username_report" placeholder="Username"><br><br>

						<label>สินค้าที่ละเมิด</label><br>
						<input type="text" id="" name="adopt_report" placeholder="Username"><br><br>

						<label>หลักฐานการละเมิด</label><br>
						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

						<label>รายละเอียด</label><br>
						<textarea name="adopt_detail" placeholder="รายละเอียดอื่นๆ..." style="height:200px"></textarea><br>
						
						<button type="submit" value="ส่ง" formaction="report.php" class="button button2">ส่ง</button>

						</form>

						<!--button type="submit" value="ส่ง" formaction="report.php" class="button button2">ส่ง</button-->

					</fieldset>
				</div>
			</div>
		</div>

	</body>
</html>