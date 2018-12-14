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
						<form id="auction" action="" method="post" enctype="multipart/form-data">

							<h1>สร้างการประมูล</h1>

							<h2>สินค้า</h2>

							<label>ไฟล์สินค้า</label><br>

							<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

							<label>ชื่อสินค้า</label><br>
							<input type="text" id="" name="adopt_name" placeholder="ชื่ออดอป..."><br><br>

							<label>หมวดหมู่</label>
							<select name="adopt_type">
						    	<option value="people">คน</option>
						    	<option value="animal">สัตว์</option>
						    	<option value="clothes">ชุด</option>
						    	<option value="item">สิ่งของ</option>
								<option value="place">สถานที่</option>
							</select><br><br>

							<label>ธีม</label>
							<input type="text" id="widget1" name="adopt_themes" placeholder="ใช้เครื่องหมาย;หรือ,เพื่อคั่นแท็ก"><br><br>

							<label>เพศ : </label>
						    	<label for="gender">
						    	<input type="radio" name="adopt_gender" value="female">ชาย
						    	<input type="radio" name="adopt_gender" value="male">หญิง
						    	<input type="radio" name="adopt_gender" value="unknown">ไม่ระบุเพศ
							</label><br><br>

							<label>รายละเอียด</label><br>
							<textarea name="adopt_detail" placeholder="รายละเอียดอื่นๆ..." style="height:200px"></textarea><br><br>

							<label>เวลาประมูล: </label>
							<div>
								<?php 
									include 'countdown.php';
								?>
							</div>

							<button type="submit" value="สร้าง" formaction="auction_submit.php" class="button button2">สร้าง</button>

							</form>

					</fieldset>
				</div>
			</div>
		</div>

	</body>
</html>