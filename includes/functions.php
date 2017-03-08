<?php

function dd($data) {
	die (var_dump($data));
}

function e ($value){
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

}

function escape($value){
	return e(Svalue);
}

function ValidateName($name) {
	if (empty($name)) {
	return "Name is required";
	}
}

function ValidateEmail($email) {
	if (empty($email)) {
	return "Email is required";
	}
}

function ValidateAddress($address) {
	if (empty($address)) {
	return "Address is required";
	}
}

function ValidateDob($dob) {
	if ($dob == '') {
	return "Date of Birth is required";
	}
}

function ValidateAge($age) {
	if (empty($age)) {
	return "Age is required";
	}
}

function ValidateMovie($movie) {
	if ($movie == '') {
	return "Movie is required";
	}
}

function ValidateGender($gender) {
	if ($gender == '') {
	return "Gender is required";
	}
}


?>

