<?php

class Post extends Controller
{
	public $content;
	public $createdAt;

	public function create() {
		$data = [
			"title" => $_POST['title'],
			"content" => $_POST["content"],
			"post_user_id" => $_SESSION['user_id']
			];
		$this->db->query("INSERT INTO posts (title, content, post_user_id) VALUES (:title, :content, :post_user_id) ", $data);
		header("Location: http://localhost:8888/PHP_course/Mwitter/user/mypage");
	}

	public function update() {

	}

	public function delete() {

	}

	public function showAll() {
		$posts = $this->db->getValues();
		$this->view('wall', $posts);
	}
}