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
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  return "Please enter a correct Email Address";
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
	else if (!preg_match("/^[0-9]+\ +[a-zA-Z]/", $address)) {
	   return "Please enter a correct address";
	}
	else if(strlen($address) > 200){
	return "Address cannot be longer than 200 characters";
	}
	return false;
}

function validateDate($date) {
    if (empty($date)) {
        return 'Date of Birth is required.';
    }
 
    if (!checkDateManually($date)) {
        return 'Please enter a correct Date of Birth.';
    }
 
    if (DateTime::createFromFormat('Y-m-d', $date)) {
        $date = DateTime::createFromFormat('Y-m-d', $date);
    }
    else if (DateTime::createFromFormat('Y/m/d', $date)) {
        $date = DateTime::createFromFormat('Y/m/d', $date);
    }
    else if (DateTime::createFromFormat('d-m-Y', $date)) {
        $date = DateTime::createFromFormat('d-m-Y', $date);
    }
    else if (DateTime::createFromFormat('d/m/Y', $date)) {
        $date = DateTime::createFromFormat('d/m/Y', $date);
    }
    else {
        return 'Please enter a correct Date of Birth.';
    }
 
    $time = new DateTime('now');
    $today = new DateTime('now');
 
    $date150YearsAgo = DateTime::createFromFormat('Y-m-d', $time->modify('-150 Year')->format('Y-m-d'));
 
    $chosenDate = $date->format('Y-m-d');
    $chosenDay = $date->format('d');
    $chosenMonth = $date->format('m');
    $chosenYear = $date->format('Y');
    $todaysDate = $today->format('Y-m-d');
    $minDate = $date150YearsAgo->format('Y-m-d');
 
    if ($chosenDate <= $minDate){
        return 'We really don\'t think you were born more than 150 years ago.';
    }
    else if ($chosenDate >= $todaysDate){
        return 'You cannot be born after today.';
    }
    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
        return 'Please enter a correct Date of Birth.';
    }
 
    return false;
}
 
function checkDateManually($date) {
    $dateArray = [];
 
    if(strpos($date, '/') !== false) {
        $dateArray = explode("/", $date);
    }
    else if(strpos($date, '-') !== false){
        $dateArray = explode("-", $date);
    }
 
    if (empty($dateArray)) {
        return false;
    }
 
    if($dateArray && count($dateArray) === 3 && (int)$dateArray[0] > 0 && (int)$dateArray[1] > 0 && (int)$dateArray[2] > 0) {
        if (checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
            return true;
        } else if (checkdate($dateArray[1], $dateArray[0], $dateArray[2])) {
            return true;
        }
        return false;
    }
 
    return false;
}
// function ValidateDate($date) {
// 	if ($date == '') {
// 	return "Date of Birth is required";
// 	}
	
// 	$time = new DateTime('now');

// 	$newtime = $time->modify('-150 Year')->format('Y-m-d');

// 	if ($date == '') {
// 		return "Date of Birth is required";
// 	}
// 	else if ($date <= $newtime){
// 	//             {
// 	//                 $validateFlag = false;
// 		return "We really dont think you were born more than 150 years ago.";
// 	}
	
// 	// else if ($date <= $babytime){
// 	// //             {
// 	// //                 $validateFlag = false;
// 	// 	return "We really dont think you were born more than 5 years ago.";
// 	// }

// return false;

// }



function ValidateAge($age) {
	
	if (empty($age)) {
	return "Age is required";
	}
	else if((int)$age >= 151){
	return "Age must be less than 150 years";
	}
	else if((int)$age < 5){
	return "Age must be larger than 5 years old";
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

