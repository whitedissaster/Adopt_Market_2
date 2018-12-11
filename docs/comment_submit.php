<!--comment submit-->

<?php
	if (session_status() == PHP_SESSION_DISABLED) {
		session_start();
	}

	include 'ConnextDatabase.php';

	isset($_REQUEST['comment_detail']) ? $comment_detail = $_REQUEST['comment_detail'] : $comment_detail = "";
	isset($_REQUEST['adopt_id']) ? $adopt_id = $_REQUEST['adopt_id'] : $adopt_id = "";
	$date_comment = date('Y-m-d h:i:sa');
	$comment_no = "$adopt_id"."_".round(microtime(true));

	echo("user : ".$_SESSION["user"]."<br>");
	echo("user id : ".$_SESSION["id"]."<br>");

	echo("adopt id : ".$adopt_id."<br>");
	echo("comment : ".$comment_detail."<br>");
	echo("Date : ".$date_comment."<br>");
	echo("comment no. : ".$comment_no."<br>");

	//---------------------------------

	$stack = $client->stack();

	$stack->push('CREATE (c:Adopt_comment) SET c += {info}', ['info' => [
		'adopt_commen_no' => $comment_no,
		'adopt_comment_time' => $date_comment,
		'adopt_comment_content' => $comment_detail,
		''
		]]);
	$stack->push('MATCH (c:Adopt_comment),(u:User),(a:Adopt)
		WHERE c.adopt_commen_no = {no} and u.id={user_id} and a.adopt_id={adopt_id}
		MERGE (a)-[:has]->(c)<-[:create]-(u)',
		['no' => $comment_no,
		'user_id' => $_SESSION["id"],
		'adopt_id' => $adopt_id ]);

	$results = $client->runStack($stack);
?>