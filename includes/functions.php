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
	else if (!preg_match("/\s/", $name)) {
	   return "Please enter full name";
	}
	else if(strlen($name) > 40){
	return "Name cannot be longer than 40 characters";
	}
	return false;
}

function ValidateEmail($email) {
	if (empty($email)) {
	return "Email is required";
	}
	else if($email > 100){
	return "Email cannot be longer than 100 characters";
	}
	return false;
}

function ValidateAddress($address) {
	if (empty($address)) {
	return "Address is required";
	}
	else if(strlen($address) > 200){
	return "Address cannot be longer than 200 characters";
	}
	return false;
}

function ValidateDob($dob) {
	if ($dob == '') {
	return "Date of Birth is required";
	}
	return false;
}

function ValidateAge($age) {
	
	if (empty($age)) {
	return "Age is required";
	}
	else if((int)$age >= 151){
	return "Age cannot be larger than 150 years";
	}
	return false;
}

function ValidateMovie($movie) {
	if ($movie == '') {
	return "Movie is required";
	}
	return false;
}

function ValidateGender($gender) {
	if ($gender == '') {
	return "Gender is required";
	}
	return false;
}

// $input = $_POST['input'];
// if ( strlen($input) < 40 ){
//     throw new Exception('Name needs to be less than 40 characters');
// }


?>

