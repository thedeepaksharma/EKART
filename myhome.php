<?php session_start();?>
<?php include'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myhome.css">
    <title>Shopping Zone</title>
   <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

   


</head>
<body>  
    
        <!--<div class="bg-div">
                <img class="logo-img" src="newcarticon.jpg" width="130" height="130" ALT="align box" ALIGN=CENTER>
                <nav>
                    <ul>
                        
                        <li><a href="index.html">My Cart </a></li>
                        <li><a href="customercare.html">24x7 Customer care</a></li>
                        <li><a href="mylogin.html">login & sign in</a></li>
                        <li style="margin-left: 20%"><input type="text" placeholder="Search.."></li>
                    </ul>
                </nav>
            </div>
        -->
        <div class="bg-div">
                <img class="logo-img" src="newcarticon.jpg" width="50" height="50" ALT="align box" ALIGN=CENTER>
                <nav>
                    <ul>
                        <strong style="font-size:42px; color: aliceblue; margin-bottom: 0">NEWCART</strong>
                        <ul ALIGN=CENTER style="margin-inline-start: 0%"><input type="text" size="110" placeholder="Search.."></ul>
                        <li><a href="http://localhost/project/mylogin.php">login & sign in</a></li>
                        <li><a href="http://localhost/project/customercare.html">24x7 Customer care</a></li>
                        <li><a href="http://localhost/project/index.html">My Cart </a></li>
                        
                        
                    </ul>
                </nav>
            </div>


           <center><h3> welcome <?php echo ($_SESSION['uname']); ?></h3></center>
      

<div class="w3-content w3-display-container">
        <a href="https://www.amazon.in/Honor-Blue-4GB-64GB-Storage/dp/B07DJCVWDT/ref=sr_1_1?s=electronics&ie=UTF8&qid=1549047823&sr=1-1&keywords=honor+8x+mobile+phones"><img class="mySlides" src="honor.jpg" style="width:100%"></a>
        <a href="https://www.amazon.in/Samsung-Galaxy-Black-Storage-Offer/dp/B07K2G74CN/ref=sr_1_1?s=electronics&ie=UTF8&qid=1549047906&sr=1-1&keywords=samsung+m20"><img class="mySlides" src="samsung.jpg" style="width:100%"></a>
        <a href="https://www.amazon.in/Redmi-6A-Black-2GBRAM-Storage/dp/B077PW9V3J/ref=sr_1_1?ie=UTF8&qid=1549048085&sr=8-1&keywords=redme+6a"><img class="mySlides" src="redme.jpg" style="width:100%"></a>
        <a href="https://www.amazon.in/OnePlus-Mirror-Black-128GB-Storage/dp/B07DJD1Y3Q/ref=sr_1_1?s=electronics&ie=UTF8&qid=1549048148&sr=1-1&keywords=oneplus+6t+mobiles"><img class="mySlides" src="oneplus.jpg" style="width:100%"></a>
        <a href="https://www.amazon.in/b?node=15246428031&pf_rd_p=ac8581be-5c45-4628-900a-718b12abd7e0&pf_rd_r=E3741QRVCQQRY35DDXP0"><img class="mySlides" src="amazonpay.jpg" style="width:100%"></a>
      
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>
      
      <script src="myhome.js"></script>


<!--
<ul>
<li><a href="myhome.html">Home</a></li>
<li><a href="contact.html">Contact & About</a></li>
<li><a href="policy.html">Policy</a></li>
<li><a href="help.html">Help</a></li>
<li><a href="social.html">Social</a></li>
</ul>    
-->

<div class="navbar">
    <a href="myhome.html" class="active">Home</a>
    <a href="contact.html">Contact</a>
    <a href="policy.html">Policy</a>
    <a href="help.html">Help</a>
    <a href="social.html">Social</a>
  </div>

</body>
</html>