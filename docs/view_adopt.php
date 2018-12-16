<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>
		<div class="row">           
			<fieldset>

				<div class="report">
					<?php
						//include 'ConnextDatabase.php';
						//$adopt_id = $_GET["adopt_id"];
						include 'report_adopt.php';
					?>
				</div>

				<h1>ข้อมูลอดอป</h1>

				<div class="col-md-5">
		            <div class="about_left">

						<!--รูป-->
						<!--img src="<?php echo $adopt_this['lo_pic']; ?>" alt="main_pic_adopt"><br-->
					
		                <img src='<?php echo 'data:image/png;base64,' . base64_encode(file_get_contents('F:/tata/draw/jpg/bride.jpg')); ?>'><br>

		            </div>
		        </div>
				<div class="col-md-7">
			        <div class="about_right">
						<p>ชื่อสินค้า : เจ้าสาว<!--?php echo $adopt_this['type']; ?--><br></p>
						<p>หมวดหมู่ : คน<!--?php echo $adopt_this['name']; ?--><br></p>
						<p>ธีม : เจ้าสาว<!--?php echo implode(", ",$adopt_this['tag']); ?--><br></p>
						<p>เพศ : หญิง<!--?php echo $adopt_this['detail']; ?--><br></p>
						<p>รายละเอียด : เจ้าสาวถ่ายพรีเว็ดดิ้ง แต่ไม่มีเจ้าบ่าวล่ะ (?)<!--?php echo $adopt_this['user_create']; ?--><br></p>
						<p>โดย : Adopt<!--?php echo $adopt_this['user_create']; ?--><br></p>

					</div>	
				</div>
			</fieldset>
		</div>
	</body>
</html>