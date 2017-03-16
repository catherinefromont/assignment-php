function validate() {
	var nameError = validateName();
	var emailError = validateEmail();
	var addressError = validateAddress();
	// var ageError = validateAge();
	// var dateError = validateDate();
	var dateError = validateDate();
	var genderError = validateGender();
	var movieError = validateMovie();

		
	// console.log('Name: ' + nameError);
	// console.log('Email: ' + emailError);
	// console.log('Address: ' + addressError);
	// console.log('Age: ' + ageError);
	// console.log('Date' + dateError);
	// console.log('Gender: ' + genderError);
	// console.log('Movie: ' + movieError);

	

  if (validateName() && validateEmail() && validateAddress() && validateDate() && validateMovie() && validateGender()){
  	
  return true;
}
  return false;
}
 


function validateEmail() {
	mailAddress = document.getElementById('email').value;
	pos1 = mailAddress.indexOf("@")
	pos2 = mailAddress.indexOf(".")
	if (pos1 >= 0 && pos2 >= 0){
		// alert(fullName + "is a valid name!");
		document.getElementById('emailError').innerHTML = mailAddress = "is a valid email address!"
		return true;
		}
		else
		{
		document.getElementById('emailError').innerHTML = mailAddress = "Please enter a valid email address"
		return false;
		}
	}



function validateName() {
	fullName = document.getElementById('name').value;
	pos1 = fullName.indexOf(" ")
	pos2 = fullName.indexOf("@")
	pos3 = fullName.indexOf(".")
	if (pos1 >= 0 && pos2 < 0 && pos3 < 0 && fullName.length > 2 && ! parseInt(fullName)){
		// alert(fullName + "is a valid name!");
		document.getElementById('nameError').innerHTML = fullName = "is a valid name!"
		return true;
	}
	else
	{
		document.getElementById('nameError').innerHTML = fullName = "Please enter a valid name"
		return false;
	}
}

function validateAddress(){
	address = document.getElementById('address').value;
	pos1 = address.indexOf(" ")
	// pos3 = fullAddress.indexOf(".")
	if (pos1 >= 1 && address.length > 2 && address.length <= 200) {
		// alert(fullName + "is a valid name!");
		document.getElementById('addressError').innerHTML = address = "is a valid address!"
		return true;
	}
	else
	{
		document.getElementById('addressError').innerHTML = address = "Please enter a valid address"
		return false;
	}

}

function validateDate() {
 var dateofbirth = document.getElementById('date');
 var calculateAge = getAge(dateofbirth.value);
 var date = document.getElementById('age').value;
 
// (getAge(document.getElementById('dob').value));
 
 if (calculateAge != date || parseInt(date) >= 150 || parseInt(date) < 0) {
 document.getElementById('ageError').innerHTML = "[JS]Please enter a valid age, based on you date of birth";
 return false;
 }
 else {
 document.getElementById('ageError').innerHTML = "";
 return true;
 }
}
function getAge(date) {
 var today = new Date();
 var birthDate = new Date(date);
 var age = today.getFullYear() - birthDate.getFullYear();
 var m = today.getMonth() - birthDate.getMonth();
 if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
 age--;
 }
 return age;
}
function calculateAge() {
 var date = document.getElementById('date');
 var age = getAge(date.value);
 document.getElementById('age').value = age;
}

// function validateAge(){

// age = document.getElementById('age').value;
// // pos1 = fullAge.indexOf(" ");
// // pos2 = fullName.indexOf("@");
// // pos3 = fullName.indexOf(".");

// if (parseInt(age) <= 150) {
//     // alert(fullName + "is a valid name!");
//    document.getElementById('ageError').innerHTML = "is a valid age!";
//    return true;
//  }

//     else
//     {
//     document.getElementById('ageError').innerHTML = "Please enter a valid age";
//     return false;
//     }

//   }

//  function validateDate(){

//  var input = document.getElementById("date");
//     var today = new Date();
//     var day = today.getDate();

//     // Set month to string to add leading 0
//     var mon = new String(today.getMonth()+1); //January is 0!
//     var yr = today.getFullYear();

//       if(mon.length < 2) { mon = "0" + mon; }
//       if(day.length < 2) { dayn = "0" + day; }

//       var date = new String( yr + '-' + mon + '-' + day );

      
//     // input.disabled = false; 
//     input.setAttribute('max', date);
// }


function validateMovie(){

	movie = document.getElementById('movie');
    if (movie.selectedIndex != 0) {
      document.getElementById('movieError').innerHTML = "is a valid selection"
      return true;
    }
    else{
    	document.getElementById('movieError').innerHTML = "Please select a movie"
    	return false;
 	}

  }

function validateGender(){
   
   gender = document.getElementById('gender');
   if (gender.selectedIndex != 0) {
     document.getElementById('genderError').innerHTML = "is a valid selection"
     return true;
   }
   else{
   	document.getElementById('genderError').innerHTML = "Please select a gender"
   	return false;
	}

 }



