<?php

class Fellowship extends Controller
{
	public function follow($user) {
		$data = [
			"follower_id" => $_SESSION['user_id'],
			"following_id" => $user
			];

		$this->db->query("INSERT INTO fellowships (follower_id, following_id) VALUES (:follower_id, :following_id) ", $data);

		
		header("Location: http://localhost:8888/PHP_course/Mwitter/user/followers");
	}

	public function unfollow() {

	}


}