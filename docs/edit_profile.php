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
						<form id="edit_profile" action="" method="post" enctype="multipart/form-data">

						<h1>แก้ไขข้อมูลส่วนตัว</h1>

						<label>รูปโปรไฟล์</label><br>

						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

						<label>Username</label><br>
						<input type="text" id="" name="user_username" placeholder="Username"><br><br>

						<label>Password</label>
						<input type="text" id="widget1" name="user_password" placeholder="Password"><br><br>

						<label>เพศ : </label>
					    	<label for="gender">
					    	<input type="radio" name="user_gender" value="female">ชาย
					    	<input type="radio" name="user_gender" value="male">หญิง
					    	<input type="radio" name="user_gender" value="unknown">ไม่ระบุเพศ
						</label><br><br>

						<!--input type="submit" value="สร้าง" formaction="Create_Adopt_Submit.php"-->

						<button type="submit" value="แก้ไข" formaction="profile.php" class="button button2">แก้ไข</button>

						<button type="submit" value="ยืนยันตัวตน" formaction="petition_personal.php" class="button button2">ยืนยันตัวตน</button>

						</form>
					</fieldset>
				</div>
			</div>
		</div>

		<script src="../js/birthday.js"></script>

	</body>
</html>