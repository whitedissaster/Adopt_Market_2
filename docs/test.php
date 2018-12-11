<!--test-->
<?php 
include 'ConnextDatabase.php';
$count=0;

$result = $client->run('MATCH (n:Themes) RETURN n.themes_name LIMIT 25');
foreach ($result->getRecords() as $record) {
	$count+=1;
	echo ($count." : ".$record->value('n.themes_name')."<br>");
}

 ?>
