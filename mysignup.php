<!DOCTYPE html>
<html>
<head>
<title>Shopping Zone</title>
<script src="http://localhost/project/mysignup.js"></script>
</head>
<body style="background-color:powderblue;">
  <link rel="stylesheet" href="mysignup.css">
<body background="ami.jpg">

<div class="formstyle">
<div class="form">


<p >WELCOME TO</p>
<h1 >NEWCART</h1>

<form id="myForm" method="post" >
    First name:<br>
    <input type="text" name="firstname" id="firstname" placeholder="first name">
    <br>
    Last name:<br>
    <input type="text" name="lastname" id="lastname" placeholder="last name">
    <br>
    Email:<br>
    <input type="email" name="email" id="email" placeholder="email">
    <br>
    Mobile No:<br>
    <input type="tel" name="mobile" id="mobile" placeholder="mobile">
    <br>
    Password:<br>
    <input type="password" name="password" id="password" placeholder="password">
    <br>
    Confirm password:<br>
    <input type="password" name="conpassword" id="conpassword" placeholder="confirm passworld">
    <br>
   <label style="font-size:22px">Gender </label>
    <select name="gender" id="gender">
      <option value="male">male</option>
      <option value="female">female</option>
      <option value="other">other</option>
    </select><br>
   <!-- <button type="button" id="signupbtn" style="text-decoration:none" onclick="num()" >sign up</button>-->
   <input type=submit  onclick="num()" value="Signup">
    </form>

  <br>


  
</div>
</div>

</body>
</html>