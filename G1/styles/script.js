// USEFULL PREDEFINED FUNCTION

function $(id){
	var element = document.getElementById(id);
	if( element == null )
		alert( 'Programmer error: ' + id + ' does not exist.' );
	return element;
}


function $$(className) {
	var element = document.getElementsByClassName(className);

	if (element == null) {
		alert('Programmer error (class): ' + className + 'does not exist.');
	}
	return element;
}

//NOT SURE WE ARE USING THESE FUNCTION, BUT MADE IT JUST IN CASE WE NEED THEM

// function valueId(id) {
	// var idValue = $(id).value;
	// return idValue;
// }

// function valueClass(className) {
	// var classValue = @(className).value;
	// return classValue;

// }

// function warningMessage(id)
// {
	// alert("Please enter a valid " + $(id).name);
	//alert("Function hit");
// }

// Test Validation for .com/.ca/.org && @hotmail @gmail @yahoo @outlook
// function testForumValidation(id) {
	//Email
	// switch($(id))
	// {
		// case "mail": {
			// var aSplit = $(id).value.split("@"); // split email at @
		
			//Exit Statement, entered two "@"
			// if(aSplit.length > 2) 
				// return warningMessage(id); // leaves function and do not proceed furthur checks until the dude fixes his shit
			
			// Split Elements to desired searching elements
			// var domain = aSplit[1];
			
			// var address = domain.split(".")[0];
			// var dot = domain.split(".")[1];
			
			// alert( address +" " + dot);
			// if(!(address == "hotmail" || address == "yahoo"|| address == "gmail"|| address == "outlook" )){
				// warningMessage(id);
			// }
			// else if(!(dot == "com" || dot == "org" || dot == "ca")){
				// warningMessage(id);
			// }
		// }break;
		// case "login": {
			
		// }break;
		// case "password2": {
			// if($(id).value != $("password").value)
				// warningMessage(id);
		// }break;
		
		
	// }

	
// }

function testEmailType(id){
	var x = $(id).value;
	x = x.substring(x.lastIndexOf("."));
	return x == ".com" || x == ".ca" || x == ".org";
}
		
function warnEmailType(id) {
	if(!testEmailType(id)){
		$("errEmail").style.visibility = 'visible';
	} else { 
		$("errEmail").style.visibility = 'hidden';
	}
}

function testUsername(id){
	var x = $(id).value;
	return x != 0;
}
		
function warnUsername(id) {
	if(!testUsername(id)){
		$("errUsername").style.visibility = 'visible';
	} else { 
		$("errUsername").style.visibility = 'hidden';
	}
}

function testPassword(id){
	var x = $(id).value.length;
	return x >= 8 && x <= 16;
}
		
function warnPassword(id) {
	if(!testPassword(id)){
		$("errPassword").style.visibility = 'visible';
	} else { 
		$("errPassword").style.visibility = 'hidden';
	}
}


function warnConfirm(id, id1) {
	if(!($(id).value == $(id1).value)){
		$("errConfirm").style.visibility = 'visible';
	} else { 
		$("errConfirm").style.visibility = 'hidden';
	}
}


    
/*======== Product page javascript ========= */


 
var z= document.getElementsByClassName("extraText");
	var i;
	for(i = 0; i < z.length; i++){
		z[i].style.display = "none";
	}

	function myFunction(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox");
		
			if (x[0].style.display === "none") {
					x[0].style.display = "block";
					y[0].style.height = "700px";
				} else {
					x[0].style.display = "none";
					y[0].style.height = "350px";
				}
	}
	
	function myFunction1(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
		
			if (x[1].style.display === "none") {
					x[1].style.display = "block";
					y[1].style.height = "700px";
				} else {
					x[1].style.display = "none";
					y[1].style.height = "350px";
				}
	}
	
	function myFunction2(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
		
			if (x[2].style.display === "none") {
					x[2].style.display = "block";
					y[2].style.height = "700px";
				} else {
					x[2].style.display = "none";
					y[2].style.height = "350px";
				}
	}
	
	function myFunction3(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
		
			if (x[3].style.display === "none") {
					x[3].style.display = "block";
					y[3].style.height = "700px";
				} else {
					x[3].style.display = "none";
					y[3].style.height = "350px";
				}
	}
	
	function myFunction4(){
	
	var x = document.getElementsByClassName("extraText");
	var y = document.getElementsByClassName("contentbox")
		
			if (x[4].style.display === "none") {
					x[4].style.display = "block";
					y[4].style.height = "700px";
				} else {
					x[4].style.display = "none";
					y[4].style.height = "350px";
				}
	}

