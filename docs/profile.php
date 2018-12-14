<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		<nav>
			<span>
				<li><a href="home.php">หน้าหลัก</a></li>
				<li><a href="Create_Adopt.php">สร้างอดอป</a></li>
				<li><a href="history.php">ประวัติการซื้อขาย</a></li>
				<li><a href="search">ค้นหา</a></li>
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

					<a href="edit_profile.php"><button class="btn"><i class="fa fa-edit" style="height: 15px;"></i></button></a>
					
					<h1>Profile</h1>
					<div class="about_left">

							<!--รูป-->
							<!--img src="<?php echo $adopt_this['lo_pic']; ?>" alt="main_pic_adopt"><br-->
					
			                <img src='<?php echo 'data:image/png;base64,' . base64_encode(file_get_contents('F:/tata/draw/jpg/swane.jpg')); ?>'><br>
			            </div>
			            
			            <div class="about_right">
							<p>ข้อมูลส่วนตัว<br></p>

						</div>

				</fieldset>
			</div>
		</div>

	</body>
</html>