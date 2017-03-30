<?php
$config = array(
	"db" => array(
	"host" => "localhost", 
	"user" => "istock", 
	"password" => '1st0$2ck9304',  
	"database" => "istock",
	"type" => "mysql", 
	"error_reporting" => true
	),
	"auto_load" => array(
		array("file"=>"app/libraries/session.php","name"=>"session"),
		array("file"=>"app/libraries/utils.php","name"=>"utils"),
		array("file"=>"app/libraries/template.php","name"=>"template"),
		array("file"=>"app/libraries/collector.php","name"=>"collector"),
		//array("file"=>"app/libraries/database.php","name"=>"database","alias" => "db"),
		array("file"=>"app/libraries/validation.php","name"=>"validation"),
		array("file"=>"app/libraries/paginator.php","name"=>"paginator")
	)

);