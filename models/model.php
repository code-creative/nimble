<?php 

class model 
{

	function __construct($nb) {
		$this->nb = $nb;
	}

	function hello()
	{
		return "Hello from model";
	}
	
}