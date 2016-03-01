<?php

class Home extends Controller 
{
	
	public function index() {

		$this->view('login');	
	}

	public function mypage() {
		echo 'pou eisai re file!';
	}

	public function say($word=' ', $second = '') {
		echo 'say' . ' ' . $word . ' ' . $second;
	} 
}
