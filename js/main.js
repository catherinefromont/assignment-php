function validate() {
  if (validateName() && validateEmail() && validateAge() && validateDate() && validateAddress() && validateMovie() && validateGender()){
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

if (parseInt(age) && parseInt(age) >=0 && parseInt(age) <=151) {
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

 function validateDate(){

 var input = document.getElementById("date");
    var today = new Date();
    var day = today.getDate();

    // Set month to string to add leading 0
    var mon = new String(today.getMonth()+1); //January is 0!
    var yr = today.getFullYear();

      if(mon.length < 2) { mon = "0" + mon; }
      if(day.length < 2) { dayn = "0" + day; }

      var date = new String( yr + '-' + mon + '-' + day );

      
    // input.disabled = false; 
    input.setAttribute('max', date);
}


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


// function validate(form)
// {
//     var genderM=form.gender_male;
//     var genderF=form.gender_female;

//     if(genderM.checked==false && genderF.checked==false ) {
//         alert("You must select male or female");
//         return false;
//     }   
// }


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