function validate() {
  if (validateName() && validateEmail() && validateAge() && validateDob() && validateAddress() && validateMovie() && validateGender()){
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
		document.getElementById('emailError').innerHTML = mailAddress = "Please enter a valid email address!"
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
		document.getElementById('nameError').innerHTML = fullName = "Please enter a valid name!"
		return false;
	}
}

function validateAge(){

age = document.getElementById('age').value;
// pos1 = fullAge.indexOf(" ");
// pos2 = fullName.indexOf("@");
// pos3 = fullName.indexOf(".");

if (parseInt(age) && parseInt(age) >=0 && parseInt(age) <=120) {
    // alert(fullName + "is a valid name!");
   document.getElementById('ageError').innerHTML = "correct age";
   return true;
 }

    else
    {
    document.getElementById('ageError').innerHTML = "Please enter a valid age!";
    return false;
    }

  }

 // function validateDob(){

 //     var dob = document.forms["ProcessInfo"]["txtDOB"].value;
 //     var data = dob.split("/");
 //     // using ISO 8601 Date String
 //     if (isNaN(Date.parse(data[2] + "-" + data[1] + "-" + data[0]))) {
 //         return false;
 //     }

 //     return true;
 // }



function validateMovie(){

  movie = document.getElementById('movie');
  if (movie.selectedIndex == 0) {
    document.getElementById('movieError').innerHTML = "Please choose another movie"
    return false;
  }

return true;
}

function validateGender(){

 var genderRadios = document.getElementsByName('gender');
 var genderSelected = false;
  
  for (var i = 0; i < genderRadios.length; i++){
  	if (genderRadios[i].checked === true) {
  		genderSelected = true;}
  }
   
 var output = document.getElementById('genderError');
 if (!genderSelected) {
 	output.innerHTML = "Please select a gender!";
 	return false;
 }

output.innerHTML = ""
return true;
}

// function getAge(dateString) {
//     var today = new Date();
//     var birthDate = new Date(dateString);
//     var age = today.getFullYear() - birthDate.getFullYear();
//     var m = today.getMonth() - birthDate.getMonth();
//     if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     return age;
// }