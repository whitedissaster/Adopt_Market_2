<!--Create Adopt Submit-->
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
			</span>
		</nav>

		<div class="all">
			<div class="row">
				<fieldset>
					<?php
						session_start();
						//include 'ConnextDatabase.php';

						$target_file = "";

						include 'upload.php';

						isset($_REQUEST['adopt_name']) ? $adopt_name = $_REQUEST['adopt_name'] : $adopt_name = "";
						isset($_REQUEST['adopt_type']) ? $adopt_type = $_REQUEST['adopt_type'] : $adopt_type = "";
						isset($_REQUEST['adopt_themes']) ? $adopt_themes = $_REQUEST['adopt_themes'] : $adopt_themes = "";
						isset($_REQUEST['adopt_gender']) ? $adopt_gender = $_REQUEST['adopt_gender'] : $adopt_gender = "";
						isset($_REQUEST['adopt_detail']) ? $adopt_detail = $_REQUEST['adopt_detail'] : $adopt_detail = "";

						//--------------------------------------------------

						echo "now user : ", $_SESSION['user']."[ID-". $_SESSION['id']."]<br>";

						echo "adopt_name : ".$adopt_name."<br>";
						echo "adopt_type : ".$adopt_type."<br>";
						echo "adopt_themes : ".$adopt_themes."<br>";
						echo "adopt_gender : ".$adopt_gender."<br>";
						echo "adopt_detail : ".$adopt_detail."<br>";

						//-------------------------------------

						$result = $client->run('MATCH (m:Main) RETURN m.adopt_count');
						$record = $result->getRecord();
						$adopt_id = $record->value('m.adopt_count')+1;

						echo "adopt_id : ",$adopt_id;

						//-------------------------------------

						$stack = $client->stack();

						$stack->push('MATCH (m:Main) SET m.adopt_count='.$adopt_id);

						$stack->push('CREATE (a:Adopt) SET a += {infos}' , ['infos' => [
									'adopt_id' => $adopt_id,
									'adopt_name' => $adopt_name , 
									'adopt_type' => $adopt_type,
									//'adopt_themes' => $adopt_themes,
									'adopt_gender' => $adopt_gender,
									'adopt_detail' => $adopt_detail,
									'location_pic' => $target_file
								] ]);
						$stack->push('MATCH (a:Adopt),(u:User)
									WHERE a.adopt_id = {adopt_id} and u.id={user_id}
									MERGE (a)<-[:create]-(u)',
									['adopt_id' => $adopt_id,
									'user_id' => $_SESSION['id'] ]);

						$results = $client->runStack($stack);
					?>
				</fieldset>
			</div>
		</div>

	</body>
</html>