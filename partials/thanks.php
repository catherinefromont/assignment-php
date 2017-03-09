<?php 

include 'partials/header.php'

?>

<div class="thanks">
	<h2 class="text-center">Thanks for the feedback <?= $name; ?></h2>
	<h3 class="text-center">We will reply to <?= $email; ?> if we need to follow up.</h2>
	
	<div class="text-center">
	<a class="btn btn-primary btn-lg"  value="Submit" href="index.php">
		Return</a>
	</div>
</div>

<?php 
include 'partials/footer.php'; 
?>
