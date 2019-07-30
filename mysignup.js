function num()
{   var haveErr = '';
    var inputName = document.getElementById("firstname").value;
    var inputName1 = document.getElementById("lastname").value;
    var validName = /^[A-Za-z\s]+$/;
    if(validName.test(inputName)==false){
   		haveErr = 'Y';
	    alert("please enter valid name ");
    }
    if(validName.test(inputName1)==false){
        haveErr = 'Y';
     alert("please enter valid name ");
    }

    var inputName2 = document.getElementById("email").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(mailformat.test(inputName2)==false){
        haveErr = 'Y';
     alert("please enter valid email ");
    }


	var inputtxt=document.getElementById("mobile").value;
	var phoneno = /^\d{10}$/;
	if(phoneno.test(inputtxt)==false){
		haveErr = 'Y';
	    alert("please enter valid number");
	}
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("conpassword").value;
    //var passw=  /^[A-Za-z]\w{7,15}$/;
    if(password != confirmPassword) {
    	haveErr = 'Y';
        alert("Passwords do not match.");       
    }
    if (haveErr == 'Y') {
    	document.getElementById("myForm").action = "http://localhost/project/mysignup.php";
    }
    else{
         alert("Successfully submitted");
         document.getElementById("myForm").action="http://localhost/project/mydatabase.php";	
    }   
}
function cancelFunction(){
    var removeName = document.getElementById("firstname").value=" ";
    var removeName = document.getElementById("lastname").value=" ";
	var removeMail = document.getElementById("email").value=" ";
	var removeNumber = document.getElementById("mobile").value=" ";
	var removePassword = document.getElementById("password").value="";
	var removeConfirmPassword = document.getElementById("conpassword").value="";
}