<?php
$pageTitle = "My Page | Mwitter";
include './views/inc/header.php'; 

?>

<div class="container-fluid">
	<div class="col-sm-8 col-sm-push-1">
		<div class="row">
			<div class="col-sm-3">
				<h1>hello </h1>
				<h2><?php echo $_SESSION['username']; ?></h2>
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div id="create_post">
				    <form action="/PHP_course/Mwitter/post/create" method="post" class="form-horizontal">
				      <div class="form-group">
				        <div class="col-sm-6">
				          <input type="text" class="form-control" id="title" name="title" placeholder="title">
				        </div>
				      </div>
				      <div class="form-group">
				        <div class="col-sm-12">
				          <textarea class="form-control" id="content" name="content" placeholder="content"></textarea>
				        </div>
				      </div>
				      <div class="form-group">
				        <div class="col-sm-1">
				          <button type="submit" class="btn btn-primary" id="submit_login" name="create">New Post</button>
				        </div>
				      </div>
				    </form>
				</div>
			</div>
			
		</div>
		
		</div>
		<div>
			<div class="row top-buffer">
			<div class="col-sm-3 col-sm-pull-3 top-buffer">
				<ul>
					<?php foreach ($data as $post) {
						echo "<li>" . $post['title'] . " :" . $post['content'] . " </li><br\>" ;
					} ?>
				</ul>
			</div>
		</div>
		</div>
	</div>
</div>
<?php
include './views/inc/footer.php';
?>