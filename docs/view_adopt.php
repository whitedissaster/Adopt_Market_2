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
						<p>ประเภท : aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<!--?php echo $adopt_this['type']; ?--><br></p>
						<p>ชื่อ : bbb<!--?php echo $adopt_this['name']; ?--><br></p>
						<p>แท็ค : ooo<!--?php echo implode(", ",$adopt_this['tag']); ?--><br></p>
						<p>รายละเอียด : eeee<!--?php echo $adopt_this['detail']; ?--><br></p>
						<p>โดย : ggg<!--?php echo $adopt_this['user_create']; ?--><br></p>

					</div>	
				</div>
			</fieldset>
		</div>
	</body>
</html>