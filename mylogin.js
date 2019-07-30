function num()
{   var haveErr = '';

    var inputName2 = document.getElementById("email").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(mailformat.test(inputName2)==false){
        haveErr = 'Y';
     alert("please enter valid email ");
    }


    var password = document.getElementById("password").value;
if (haveErr == 'Y') {
    	document.getElementById("myForm").action = "mylogin.html";
    }
    else{
         alert("Successfully login");
         document.getElementById("myForm").action = "myhome.html";	
    }   
}
function cancelFunction(){
	var removeMail = document.getElementById("email").value=" ";
	var removePassword = document.getElementById("password").value="";
}