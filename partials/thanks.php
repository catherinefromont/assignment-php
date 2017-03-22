<?php 

include 'partials/header.php'

?>
<div class="animate-area">
<div class="col-xs-12 col-lg-10 col-lg-offset-1 contact animate-area">
	<h2 class="text-center">Thanks for the feedback <?= $name; ?></h2>
	<h3 class="text-center">We will reply to <?= $email; ?> if we need to follow up.</h2>
	
	<div class="text-center">
	<a class="btn btn-primary btn-lg"  value="Submit" href="index.php">
		Return</a>
	</div>
</div>
</div>

<?php 
include 'partials/footer.php'; 
?>

