<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://localhost/mylogin.js"></script>
    <link rel="stylesheet" type="text/css" href="mylogin.css">
    <title>Shopping Zone</title>
</head>
<body> 
<body background="http://localhost/images/ami.jpg"></body>

<div class="formstyle">
<div class="form">
<form id="myForm" method="post" action="login.php"> 
    <p >WELCOME TO</p>  
    <h1 >NEWCART</h1>   
    
    Mobile No :<br>
    <input type="tel" name="uname" placeholder="enter your mobile no.">
    <!--<input type="tel" name="uname" value="<?php if(isset($_COOKIE["uname"]))
    {echo $_COOKIE["uname"];} ?>" required="">-->
    <br>
    Password:<br>
    <input type="password" name="pwd" placeholder="enter your passworld">
    <!--<input type="password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])){echo $_COOKIE["pwd"];} ?>" required=""><br>-->
    <br>
    <input type=submit value="Login" name="loginname">
    <p >Not an user ?</p>  
    <button type="submit" id="signbtn" name="signupname" formaction="mysignup.php" >Signup</button><br>
    </form>
    <br>
<!--<a style="text-decoration:none" href="myhome.html"><button type="button" id="loginbtn" >login</button></a>

<p >Not an user ?</p>  
        
<a style="text-decoration:none" href="mysignup.html"><button type="button" id="signupbtn">sign up</button></a-->
</div>
</div>
</body>
</html>