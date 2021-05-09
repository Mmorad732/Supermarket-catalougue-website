function regvalidation(){
  var valid = false;
  formLabels = document.regForm.getElementsByTagName("label");
  
  var firstName = document.regForm.SUfn.value;
  if(firstName==""){
		formLabels[0].innerHTML="First Name*";
		formLabels[0].style="color: red";
		valid = false;
	}
	else if( !isNaN(firstName)){
	  formLabels[0].innerHTML="First Name*";
		formLabels[0].style="color: red";
		alert("First name must be text only");
		valid = false;
	}else {
		formLabels[0].innerHTML="First Name";
		formLabels[0].style="color: black";
		valid = true;
	}
	
	var lastName = document.regForm.SUln.value;
	if(lastName==""){
		formLabels[1].innerHTML="Last Name*";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if( !isNaN(lastName)){
		formLabels[1].innerHTML="Last Name*";
		formLabels[1].style="color: red";
		alert("Last name must be text only");
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Last Name";
		formLabels[1].style="color: black";
		valid = valid = true;
	}
	
	var email = document.regForm.SUemail.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(email==""){
		formLabels[2].innerHTML="Email*";
		formLabels[2].style="color: red";
		valid = false;
	}
	else if(!re.test(email)){
		formLabels[2].innerHTML="Email*";
		formLabels[2].style="color: red";
		alert("Invalid Email");
		valid = false;
	}
	else {
		formLabels[2].innerHTML="Email";
		formLabels[2].style="color: black";
		valid = true;
	}
	
  var password = document.regForm.SUpassword.value;
  var repassword = document.regForm.SUrepassword.value;

	if(password == ""){
		formLabels[3].innerHTML="Password*";
		formLabels[3].style="color: red";
		valid = false;
	}
	else if(password.length < 8){
		formLabels[3].innerHTML="Password*";
		formLabels[3].style="color: red";
		alert("Password must be > 8");
		valid = false;
	}
	else {
	  if(password == repassword){
		formLabels[3].innerHTML="Password";
		formLabels[3].style="color: black";
		formLabels[4].innerHTML="re-Password";
	   formLabels[4].style="color: black";
	  valid =true;
	  }else{
	   formLabels[3].innerHTML="Password*";
	   formLabels[3].style="color: red";
	   formLabels[4].innerHTML="re-Password*";
	   formLabels[4].style="color: red";
	   alert("Password doesn't match");
	   valid = false;
	  }
	}



  
  return valid;
  
}

function signinvalidation(){
  var valid = true;
	
	formLabels = document.signinForm.getElementsByTagName("label");
	
	var email = document.signinForm.SIemail.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email==""){
		formLabels[0].innerHTML="Email*";
		formLabels[0].style="color: red";
		valid = false;
	}
	else if(!re.test(email)){
		formLabels[0].innerHTML="Email*";
		formLabels[0].style="color: red";
		alert("Invalid Email");
		valid = false;
	}
	else {
		formLabels[0].innerHTML="Email";
		formLabels[0].style="color: black";
   	valid = true;
	}
	
	var password = document.signinForm.SIpassword.value;
	if(password == ""){
		formLabels[1].innerHTML="Password*";
		formLabels[1].style="color: red";
		valid = false;
	}else if(password.length < 8){
		formLabels[1].innerHTML="Password*";
		formLabels[1].style="color: red";
		alert("Check password ");
		valid = false;
	}

	else {
		formLabels[1].innerHTML="Password";
		formLabels[1].style="color: black";
		valid = true;
	}
	
	return valid;
}





