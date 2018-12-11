<!--view adopt page id-->

<?php
	include 'ConnextDatabase.php';
	$adopt_id = $_GET["adopt_id"];

	include 'login_tab.php';
?>


	
	<?php $adopt_this = call_adopt($adopt_id); ?>

<fieldset>
	<h1>ข้อมูลอดอป</h1>
	<!--รูป-->
	<img src="<?php echo $adopt_this['lo_pic']; ?>" alt="main_pic_adopt"><br>

	ประเภท : <?php echo $adopt_this['type']; ?><br>
	ชื่อ : <?php echo $adopt_this['name']; ?><br>
	แท็ค : <!--?php echo implode(", ",$adopt_this['tag']); ?--><br>
	รายละเอียด : <?php echo $adopt_this['detail']; ?><br>
	โดย : <!--?php echo $adopt_this['user_create']; ?--><br>
</fieldset>

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