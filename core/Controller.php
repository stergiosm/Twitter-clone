<?php

class Controller 
{
	protected $db;

	public function __construct() {
		$this->db = Database::getInstance();
	}	

	public function get() {
		
	}

	public function view($view, $data) 
	{
		require_once '../Mwitter/views/' . $view . '.php';
	}
	
}