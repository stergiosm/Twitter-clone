<?php


class User extends Controller
{

	public function index() {

		$this->view('login');
	}

	public function login() {
		$data = [
			"username" => $_POST['username']
			];

		if ( !empty($_POST['password']) ) {
			$result = $this->db->query("SELECT * FROM users WHERE username = :username ", $data);

			if ( $result ) {
				if ( password_verify($_POST['password'], $result[0]['password']) ) {

					$_SESSION['status'] = "logged_in";
	                $_SESSION['user_id'] = $result[0]['user_id'];
	                $_SESSION['username'] = $_POST['username'];
					header("Location: http://localhost:8888/PHP_course/Mwitter/user/mypage");
				} else {
					$this->view('login');
				}
			} else {
				echo 'provide valid email, username and passord';
			}
		} else {
			echo 'complete all the fields ';
		}
	}

	public function logout() {
		$_SESSION = array();
        session_destroy();
		
		header("Location: http://localhost:8888/PHP_course/Mwitter/");
	}
	
	public function register() {

		$data = [
			"username" => $_POST['username'],
			"email" => $_POST["email"],
			"password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
			];
		$this->db->query("INSERT INTO users (username, email, password) VALUES (:username, :email, :password) ", $data);
		header("Location: http://localhost:8888/PHP_course/Mwitter/");

	}

	public function showProfile($username) {
		$data = [
				"username" => $username
			];
			$user = $this->db->query("SELECT * FROM users WHERE username = :username ", $data);
		$this->view('profile',$user);
	}

	public function getUser() {
		echo $this->$_SESSION['id'];
	}

	public function getFollowing() {
		$data = [
				"user_id" => $_SESSION['user_id']
			];
		$results = $this->db->query("SELECT * FROM fellowships
                                    WHERE fellowships.follower_id = :user_id", $data);

		foreach($results as $result) {
			$following = $result['following_id'];

			$name = $this->db-query("SELECT username FROM users WHERE user_id = :user_id", ["user_id" => '5']);
			var_dump($name);
		}

	}

	public function mypage() {

		if ($_SESSION['status'] == "logged_in") {
			$data = [
				"user_id" => $_SESSION['user_id']
			];

			$posts = $this->db->query("SELECT * FROM posts WHERE post_user_id = :user_id ", $data);
			$this->view('mypage', $posts);
		} else {
			header("Location: http://localhost:8888/PHP_course/Mwitter/");
		}
	}

}