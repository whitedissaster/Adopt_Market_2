<?php
	session_start();
	require_once '../vendor/autoload.php';
	use GraphAware\Neo4j\Client\ClientBuilder;
	$client = ClientBuilder::create()
	->addConnection('default', 'http://neo4j:258456@localhost:7474')
	//Example for HTTP connection configuration (port is optional)
	->addConnection('bolt', 'bolt://neo4j:258456@localhost:7687')
	// Example for BOLT connection configuration (port is optional)
	->build();
?>