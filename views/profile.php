<?php
$pageTitle = "My Page | Mwitter";
include './views/inc/header.php'; 

?>
<div class="container-fluid">
	<div class="col-sm-6 col-sm-push-1">
		<div class="row">
			<div class="col-sm-3">
				<?php if ( $data ) { ?>
				<button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
					<span class="glyphicon glyphicon-user user" aria-hidden="true"><?php echo $data[0]['username']; ?>'s Profile</span>
					<!-- <h2><?php echo $data[0]['username']; ?>'s Profile</h2> -->
				</button>
				<?php } ?>
			</div>
			<div class="col-sm-3 col-sm-push-1"><a href="http://localhost:8888/PHP_course/Mwitter/fellowship/follow/<?php echo $data[0]["user_id"]; ?>"><h1>Follow</h1></a>
			</div>
			<div class="col-sm-3 col-sm-push-3"><a href="http://localhost:8888/PHP_course/Mwitter/fellowship/unfollow/<?php echo $data[0]["user_id"]; ?>"><h1>Unfollow</h1></a>
			</div>
		
		</div>
	</div>
</div>







<?php
include './views/inc/footer.php';
?>

