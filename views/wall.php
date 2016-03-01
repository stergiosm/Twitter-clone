<?php
$pageTitle = "Wall | Mwitter";

include './views/inc/header.php'; 
?>



<h1> this is the place that holds all the posts!!</h1>
<div class="col-sm-3 col-sm-push-4 top-buffer">
<ul>
	<?php foreach ($data as $post) {
		echo "<li>" . $post['title'] . " : " . $post['content'] . "</li><br\>" ;
	} ?>
</ul>

</div>


<?php
include './views/inc/footer.php';
?>