<!--view adopt page id-->
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
		  	<!--a href="home.php">หน้าหลัก</a-->
			<a href="Create_Adopt.php">สร้างอดอป</a>
			<a href="set_auction.php">สร้างการประมูล</a>
			<a href="adopt.php">view adopt</a>
			<a href="history.php">ประวัติการซื้อขาย</a>
			<a href="search.php">ค้นหา</a>
		</div>

		<span onclick="openNav()">&#9776; Menu</span>

		<div class="login">
			<?php
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'login_tab.php';
			?>
		</div>
		
		<!--?php $adopt_this = call_adopt($adopt_id); ?-->

		<div class="all">

			<?php
				//include 'ConnextDatabase.php';
				include 'view_adopt.php';
			?>

			<?php
				//include 'ConnextDatabase.php';
				include 'view_comment.php';
			?>

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
			
		</div>
		</div>

			
		
	</body>
</html>