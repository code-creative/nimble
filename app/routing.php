<?php
$routing = array(
	"default" => array(
		"controller" => "controllers/system",
		"method" => "index",
		"load" => array(
			array("file"=>"models/model.php","name"=>"model")
		)
	),
	"page" => array(
		"controller" => "controllers/system",
		"method" => "page"
	)	
);