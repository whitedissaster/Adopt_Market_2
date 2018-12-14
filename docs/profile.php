<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../js/menu.js"></script>
	</head>
	<body>

		<div id="mySidenav" class="sidenav">
		  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<a href="home.php">หน้าหลัก</a>
			<a href="Create_Adopt.php">สร้างอดอป</a>
			<a href="auction.php">สร้างการประมูล</a>
			<a href="history.php">ประวัติการซื้อขาย</a>
			<a href="search">ค้นหา</a>
		</div>

		<span onclick="openNav()">&#9776; Menu</span>

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

					<a href="edit_profile.php"><button class="btn"><i class="fa fa-edit" style="height: 15px;"></i></button></a>
					
					<h1>Profile</h1>
					<div class="about_left">

							<!--รูป-->
							<!--img src="<?php echo $adopt_this['lo_pic']; ?>" alt="main_pic_adopt"><br-->
					
			                <img src='<?php echo 'data:image/png;base64,' . base64_encode(file_get_contents('F:/tata/draw/jpg/swane.jpg')); ?>'><br>
			            </div>
			            
			            <div class="about_right">
							<p>ข้อมูลส่วนตัว<br></p>
							<label>Username : AllAllNz</label><br><br>
							<label>Password : *************</label><br><br>
							<label>เพศ : หญิง</label><br><br>

				</fieldset>
			</div>
		</div>

	</body>
</html>