<!--view adopt page id-->
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
				<li><a href="">หน้าหลัก</a></li>
				<li><a href="Create_Adopt.php">สร้างอดอป</a></li>
				<li><a href="profile.php">โปรไฟล์</a></li>
				<li><a href="search.php">ค้นหา</a></li>
			</span>
		</nav>

		<!--div class="signup">
			<?php
				//include 'ConnextDatabase.php';
				//$adopt_id = $_GET["adopt_id"];


				//include 'sign_up_tab.php';
			?>
		</div-->

		<div class="login">
			<?php
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'login_tab.php';
			?>
		</div>
		
		<!--?php $adopt_this = call_adopt($adopt_id); ?-->

		<div class="all">
			<div class="row">           
				<fieldset>

					<a href="report_adopt.php"><button class="reportbtn"><i class="fa fa-warning" style="height: 20px;"></i></button></a>

					<h1>ข้อมูลอดอป</h1>

					<div class="col-md-5">
			            <div class="about_left">

							<!--รูป-->
							<!--img src="<?php echo $adopt_this['lo_pic']; ?>" alt="main_pic_adopt"><br-->
					
			                <img src='<?php echo 'data:image/png;base64,' . base64_encode(file_get_contents('F:/tata/draw/jpg/swane.jpg')); ?>'><br>
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

	<!--div class="comment"-->
		<?php

			include 'comment.php';

				function call_adopt($id){
					//echo $id;
					global $client;
					$query = 'Match (n:Adopt)
					WHERE n.adopt_id='.$id.'
					 RETURN 
						n.adopt_detail as detail,
						n.adopt_name as name,
						n.adopt_id as id,
						n.adopt_type as type,
						n.adopt_gender as gender,
						n.location_pic as lo_pic
						LIMIT 1';
					$result = $client->run($query);
					$record = $result->getRecord();

					return array('detail' => $record->value('detail') ,
									'name' => $record->value('name') ,
									'id' => $record->value('id') ,
									'gender' => $record->value('gender'),
									'type' => $record->value('type'),
									'lo_pic' => $record->value('lo_pic')
						    		);
				}
				//$adopt_this = call_adopt(2);
		?>
			<!--/div-->
			<!--div class="comment_submit"-->
				<?php

					include 'comment_submit.php';
				
				?>
			<!--/div-->
		</div>
		
	</body>
</html>