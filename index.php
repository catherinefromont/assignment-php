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

}












require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>