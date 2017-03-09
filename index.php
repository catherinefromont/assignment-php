<?php

require 'includes/functions.php';

$name = $email = $address = $dob = $age = $movie = $gender = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// The request is using the POST method
	// This is where you will call your validation code
	// dd($_POST);
	$name = $_POST["name"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
	$age = $_POST["age"];
	$movie = !empty($_POST["movie"]) ? $_POST['movie'] : '';
	$gender = !empty($_POST["gender"]) ? $_POST['gender'] : '';


	$errors['name'] = validateName($name);
	$errors['email'] = validateEmail($email);
	$errors['address'] = validateAddress($address);
	$errors['dob'] = validateDob($dob);
	$errors['age'] = validateAge($age);
	$errors['movie'] = validateMovie($movie);
	$errors['gender'] = validateGender($gender);

	if (!$errors['name'] && !$errors['email'] && !$errors['address'] && !$errors['dob'] && !$errors['age'] && !$errors['movie'] && !$errors['gender']) {
		$formcontent = "From: $name \n Email: $email \n Address: $address \n Date of Birth: $dob \n Age: $age \n Movie: $movie \n Gender: $gender \n";
		$recipient = "catherinegfromont@gmail.com";
		$subject = "Website Form Submission";
		$mailheader = "From: $email \r\n";


		mail($recipient, $subject, $formcontent, $mailheader) or die ("error");
		require 'partials/thanks.php';
		die();

	}
	

}












require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>